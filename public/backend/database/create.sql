   -- CREATION DE TABLES


   CREATE TABLE IF NOT EXISTS services(
      id_service INT AUTO_INCREMENT,
      nom VARCHAR(50),
      description VARCHAR(120),
      duree_minutes INT,
      prix_euros DECIMAL(10,2),
      PRIMARY KEY(id_service)
   );

   CREATE TABLE IF NOT EXISTS reservations(
      id_reservation INT AUTO_INCREMENT,
      service_id INT NOT NULL,
      date_rdv DATE,
      heure_rdv TIME,
      nom_client VARCHAR(50),
      email_client VARCHAR(50),
      telephone_client VARCHAR(20),
      statut ENUM('en_attente', 'confirme', 'annule') DEFAULT 'en_attente',
      PRIMARY KEY(id_reservation),
      FOREIGN KEY(service_id) 
      REFERENCES services(id_service) 
      ON DELETE CASCADE
   );

   CREATE TABLE IF NOT EXISTS disponibilites(
      id INT AUTO_INCREMENT,
      jour_semaine INT,
      heure_debut TIME,
      heure_fin TIME,
      actif BOOLEAN,
      PRIMARY KEY(id)
   );

   CREATE TABLE IF NOT EXISTS users(
      id_user INT AUTO_INCREMENT,
      email_user VARCHAR(150),
      password_user VARCHAR(255),
      is_admin BOOLEAN,
      PRIMARY KEY(id_user),
      UNIQUE(email_user)
   );


   -- JEU DE DONNEES

   INSERT INTO disponibilites (jour_semaine, heure_debut, heure_fin, actif) VALUES
   -- Lundi (1)
   (1, '09:00:00', '12:00:00', 1),
   (1, '14:00:00', '18:00:00', 1),

   -- Mardi (2)
   (2, '09:00:00', '12:00:00', 1),
   (2, '14:00:00', '18:00:00', 1),

   -- Mercredi (3)
   (3, '09:00:00', '12:00:00', 1),
   (3, '14:00:00', '18:00:00', 1),

   -- Jeudi (4)
   (4, '09:00:00', '12:00:00', 1),
   (4, '14:00:00', '18:00:00', 1),

   -- Vendredi (5)
   (5, '09:00:00', '12:00:00', 1),
   (5, '14:00:00', '18:00:00', 1),

   -- Samedi (6)
   (6, '09:00:00', '12:00:00', 1),
   (6, '14:00:00', '18:00:00', 1),

   -- Dimanche (7) fermé
   (7, '00:00:00', '00:00:00', 0);

   INSERT INTO services (nom, description, duree_minutes, prix_euros) VALUES
   ('Coupe Homme','Une coupe pour homme', 30, 25.00),
   ('Coloration','Une coloration', 120, 80.00);


   INSERT INTO users (email_user, password_user, is_admin) VALUES
   ("admin@admin.com", "$2y$10$hp8Yni2Jy5EPfNH2uZOvreI/8mKjo0j30gzTRw3CVPQ8NvJi3tnKq", true);


   INSERT INTO reservations (service_id, date_rdv, heure_rdv, nom_client, email_client, telephone_client, statut) VALUES
   (1, '2026-03-17', '09:00:00', 'Jérome OLIVIER', 'jerome.olivier@example.com', '+33612345678', 'confirme'),
   (1, '2026-03-17', '10:00:00', 'Michel Letruc', 'michel.letruc@example.com', '+33687654321', 'en_attente'),
   (2, '2026-03-18', '14:00:00', 'Martin Arbre', 'arbre.martin@example.com', '+33611223344', 'confirme'),
   (1, '2026-03-19', '09:30:00', 'Nom Prenom', 'nom.prenom@example.com', '+33699887766', 'annule'),
   (2, '2026-03-20', '15:00:00', 'Paul Letruc', 'paul.letruc@example.com', '+33655667788', 'en_attente');