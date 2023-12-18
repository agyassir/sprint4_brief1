create DATABASE youcrafting;

use youcrafting;

CREATE Table utilisateur(
    id int PRIMARY KEY auto_increment,
    fname TEXT,
    lname TEXT,
    username VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255)
);
use youcrafting;
CREATE Table article(
    id int PRIMARY KEY auto_increment,
    titre TEXT,
    contenue text,
    date_creation DATE,
    id_utilisateur int,
    Foreign Key (id_utilisateur) REFERENCES utilisateur(id)
);