Fictional Cycles
================

This is the beginnings of a website that I made in 2011 for a local bike shop (in the end it wasn't used). One thing they wanted was to be able to show their current bikes on their site, so I started making this with a MySQL database to store bike information, and I planned to add CMS features later so they could add bikes to the site when needed. It uses:

* MySQL to store bike info
* PHP to retrieve and display bike info
* XHTML 1.0
* CSS 2.0
* JavaScript (including a basic slideshow script that I wrote)
* jQuery
* Google Maps API (probably an old version of this API since I wrote this 4 years ago)

To create the database:

CREATE TABLE bikes( bid INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, brand VARCHAR(20) NOT NULL, model VARCHAR(50) NOT NULL, new BOOL NOT NULL, type ENUM('Road', 'Mountain', 'Hybrid/Town', 'BMX', 'Single-speed/Fixie', 'Childrens', 'Folding', 'Cruiser', 'Electric') NOT NULL, price DECIMAL(10, 2) UNSIGNED NOT NULL, rrp DECIMAL(10, 2) UNSIGNED, description TEXT, entered TIMESTAMP DEFAULT 0, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);

Then here's some sample bikes I put in to test:

INSERT INTO bikes (brand, model, new, type, price, rrp, description, entered) VALUES ('Halycon', 'Albany', true, 'Hybrid/Town', '249.00', '299.00', 'The Halcyon Albany cycle is available to rent from Fictional Cycles for the day with multiple drop off sites for £15 per day with £100 deposit. All of which includes an information pack with map, helmet, lock and high vis vest. Save 20% when you hire for a week!', CURRENT_TIMESTAMP);

INSERT INTO bikes (brand, model, new, type, price, rrp, description, entered) VALUES ('Emmelle', 'Luscious 2010', true, 'Hybrid/Town', '129.00', '149.00', 'The Emmelle Luscious is a girl''s cruiser bike with classic styling. As well as looking good, the Luscious features a strong steel frame and a practical rear mudguard and chainguard.', CURRENT_TIMESTAMP);

INSERT INTO bikes (brand, model, new, type, price, rrp, description, entered) VALUES ('Haro', 'F1C BMX 2010', true, 'BMX', '199.00', '249.00', 'The Haro F1C is a great BMX for beginners. With a solid steel frame and thick tyres, the F1C is built to last. If you''re interested in starting BMX riding then this is the perfect bike for you.', CURRENT_TIMESTAMP);
