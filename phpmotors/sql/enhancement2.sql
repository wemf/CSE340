-- IF YOU DON'T WANT TO SAVE ANYTHING, RUN EACH STATAMENT WITH ROLLBACK OPTION ACTIVATED

INSERT INTO clients (clientFirstname, clientLastName, clientEmail, clientPassword, comment) VALUES ("Tony", "Stark", "tony@starkent.com", "Iam1ronM@n", "I am the real Ironman");

UPDATE clients SET clientLevel = 3 WHERE clientEmail = "tony@starkent.com";

UPDATE inventory SET invDescription = REPLACE( invDescription, "small interior", "spacious interior") WHERE invMake = "GM" AND invModel = "Hummer";

SELECT * FROM inventory AS inventory LEFT JOIN carclassification AS classification ON inventory.classificationId = classification.classificationId WHERE classification.classificationName = "SUV";

DELETE FROM inventory where invModel = "Wrangler" AND invMake = "Jeep";

UPDATE inventory SET invImage = CONCAT('/phpmotors', invImage), invThumbnail = CONCAT('/phpmotors', invThumbnail);
