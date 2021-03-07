-- event koji na svakih 10 dana menja cenu knjige
-- ako je cena veca od 1000din smanji je za 20%, ako je manja od 600din uvecaj za 20%
SET GLOBAL event_scheduler = ON;
drop event if exists menjaj_cenu;
delimiter $$
create event menjaj_cenu
on schedule every 10 day
starts '2021-02-08 21:30:00' enable
do
begin
declare cena int;
declare id int;
declare curs cursor for select b_id,b_price from book;
open curs;
L: loop
fetch curs into id,cena;
if(cena <=600) then
update book set b_price=b_price+b_price*0.2
where b_id=id;
end if;
if(cena>=1000) then
update book set b_price=b_price-b_price*0.2
where b_id=id;
end if;
end loop L;
close curs;
end $$
delimiter ;

-- procedura za brisanje kategorije, poziva se na stranici prosess_delcategory.php
drop procedure if exists brisi_kategoriju;
DELIMITER $$
create procedure brisi_kategoriju(IN category varchar(25))
BEGIN
DELETE FROM `category` WHERE `cat_nm`=category;
END $$
DELIMITER ; 

-- procedura za dodavanje nove knjige, poziva se na stranici process_addbook.php
drop procedure if exists dodaj_knjigu;
DELIMITER $$
create procedure dodaj_knjigu(IN naslov varchar(25), IN kategorija varchar(25), IN opis longtext, IN izdavac varchar(25),
IN izdanje varchar(25), IN sifra varchar(25), IN strane int, IN cena int, IN slika longtext)
BEGIN
INSERT INTO `book` (`b_nm`,`b_subcat`,`b_desc`, `b_publisher`, `b_edition`,`b_isbn`,`b_page`, `b_price`, `b_img`)
VALUES(naslov,kategorija,opis,izdavac,izdanje,sifra,strane,cena,slika);
END $$
DELIMITER ;

-- event koji brise narucbine nakon isporuke, odnosno cisti tabelu shipping_details na svakih mesec dana
drop event if exists brisi_narudzbine;
DELIMITER $$
create event brisi_narudzbine 
on schedule every 1 month
starts '2021-02-10 21:00:00' enable
do
begin
delete from `shipping_details` where 1;
end $$
DELIMITER ;

-- trigger koji postavlja kolicinu(knjige na stanju) na 5 i cenu na 800 din ukoliko je cena manja od 800
drop trigger if exists upisi_kolicinu_cenu;
DELIMITER $$
create trigger upisi_kolicinu_cenu
before insert on book
for each row
begin
set new.b_number=5;
if new.b_price < 800 then
set new.b_price=800;
end if;
end $$
DELIMITER ; 

-- procedura za registraciju korisnika, poziva se na stranici process_register.php

drop procedure if exists registruj_korisnika;
DELIMITER $$
create procedure registruj_korisnika(IN ime varchar(35),IN username varchar(25),IN sifra varchar(20),
 IN pol varchar(7),IN email varchar(35),IN broj varchar(12), IN grad varchar(20))
begin
INSERT INTO `user`(`u_fnm`,`u_unm`,`u_pwd`,`u_gender`,`u_email`,`u_contact`,`u_city`) 
VALUES(ime,username,sifra,pol,email,broj,grad);
end $$
DELIMITER ;


-- triger koji pre brisanja poruke iz kontakta, ubacuje poruku u stare kontakte kako bismo sacuvali to
drop trigger if exists prebaci_podatke;
DELIMITER $$
create trigger prebaci_podatke
before delete on contact
for each row
begin
insert into `old_contact`(`name`,`email`,`qvr`)
values(old.`con_nm`,old.`con_email`,old.`con_query`);
end $$
DELIMITER ;

-- event koji brise tabelu kontakt svakog meseca

drop event if exists brisi_kontakte;
DELIMITER $$
create event brisi_kontakte
on schedule every 1 month
starts '2021-02-08 12:12:12'
enable do
begin
DELETE FROM `contact` where 1;
end $$
DELIMITER ;


-- fukcija koja vraca broj narudzbina

drop function if exists broj_narudzbina;
DELIMITER $$
create function broj_narudzbina()
returns int
begin
declare broj int default 0;
select count(id) into broj from shipping_details;
return broj; 
end $$
DELIMITER ;

-- funkcija koja vraca broj korisnika sa tim username-om, koristi se u process_login  kod validacije
drop function if exists br_korisnika;
DELIMITER $$
create function br_korisnika(usrnm varchar(50))
returns int
begin
declare broj int default 0;
select count(*) into broj from `user` WHERE `u_unm`=usrnm;
return broj;
end $$
DELIMITER ;







