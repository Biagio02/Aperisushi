CREATE DATABASE Sushi

CREATE TABLE Prenotazione(
    Nome varchar(20) NOT NULL,
    Email varchar(30) NOT NULL,
    Ora TIME NOT NULL,
    Data DATE NOT NULL,
    QNTclienti INT(2) NOT NULL,
    ID_Prenotazione int(5) NOT NULL,
    PRIMARY KEY (ID_Prenotazione)
)