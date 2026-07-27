use sippis;
create table if not exists rosskur
(
    id          int auto_increment primary key,
    stamm       text not null,
    art         text not null,
    anzahl      int  not null,
    ankunft     time not null,
    anreise     text not null,
    schlafen    int  not null,
    vegi        text null,
    vorname1    text not null,
    nachname1   text not null,
    tele1       text not null,
    mail1       text null,
    whatsapp1   text null,
    vorname2    text not null,
    nachname2   text not null,
    tele2       text not null,
    mail2       text null,
    whatsapp2   text null,
    anmerkungen text null
);