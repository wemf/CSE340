-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `phpmotors`
--
-- --------------------------------------------------------
--
-- Table structure for table `inventory`
--
DROP TABLE IF EXISTS `images`;
DROP TABLE IF EXISTS `inventory`;
DROP TABLE IF EXISTS `carclassification`;

CREATE TABLE `inventory` (
  `invId` varchar(20) NOT NULL,
  `invYear` int(4) UNSIGNED NOT NULL,
  `invMake` varchar(30) NOT NULL,
  `invModel` varchar(50) NOT NULL,
  `invDescription` text NOT NULL,
  `invPrice` decimal(10, 2) NOT NULL,
  `invMiles` int(7) UNSIGNED NOT NULL,
  `invColor` varchar(20) NOT NULL,
  `classificationId` int(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`invId`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
--
-- Dumping data for table `inventory`
--
INSERT INTO `inventory` (
    `invId`,
    `invYear`,
    `invMake`,
    `invModel`,
    `invDescription`,
    `invPrice`,
    `invMiles`,
    `invColor`,
    `classificationId`
  )
VALUES (
    'T7KSKKROJHT0NT6O',
    2013,
    'Volvo',
    'XC90',
    'Intuitively yours. Advanced technology helps connect your drive to personalized comfort and mobility.',
    65321,
    45875,
    'White',
    8
  ),
  (
    '04I2IRQWSQ2QTYWT',
    2019,
    'Hyundai',
    'Sonata',
    'The 2019 Hyundai Sonata Hybrid is the more fuel-efficient version of the regular Sonata. It is powered by a combined 193-hp, 2.0-liter four-cylinder engine and an electric motor mated to a six-speed automatic transmission.',
    '35999.00',
    32500,
    'Light Brown',
    8
  ),
  (
    '0HT5F99KUZUOY2GO',
    2017,
    'Chevrolet',
    'Tahoe',
    'This Chevrolet Tahoe Premier 4WD is loaded with Leather Seats, Navigation System, Suspension Package, Alloy Wheels, Preferred Package, Third Row Seating, Blind Spot Monitoring, Parking Sensors, Heated Seats, Android Auto, CarPlay, Bluetooth, Backup Camera, Remote Start and many, many more features.',
    '44281.00',
    70651,
    'Gray',
    4
  ),
  (
    '0TWWOKV6V9YE8EAN',
    1986,
    'Mystery',
    'Machine',
    'Scooby and the gang always found luck in solving their mysteries because of there 4 wheel drive Mystery Machine. This Van will help you do whatever job you are required to with a success rate of 100%.',
    '10000.00',
    101345,
    'Green',
    5
  ),
  (
    '197K189P52LJFOUE',
    2018,
    'BMW',
    'X5',
    'The new BMW X5 is a fantastically capable all-rounder. It’s big, comfortable and quiet, and the diesel engines should offer decent performance with reasonable running costs. The fact there’s not one single thing that elevates the X5 above its rivals is perhaps a little unfair; the premium SUV segment remains a highly competitive and fiercely fought class.',
    '42655.00',
    44650,
    'White',
    1
  ),
  (
    '1L5UQBY50QF364W8',
    2015,
    'Mercedes',
    'E',
    'The 255-hp turbo E 350 squeezes more power from less fuel, self-tuning every few milliseconds. The E 450\\\'s 362-hp turbo inline-6 is electrified with innovative hybrid technology, for added gas-free response and responsibility.',
    '45000.00',
    41258,
    'Silver',
    3
  ),
  (
    '279T4IXN4LTBEXKM',
    2021,
    'Ford',
    'Maverik',
    'The 2021 Maverick Compact Truck is the first-ever standard full hybrid pickup in America. It has a do-it-yourself customizable FlexBed, roomy interior & the latest technology. Plus, the Maverick truck is big enough on the inside to seat 5. Come and get it as it will not be here long.',
    '24988.00',
    11016,
    'Red',
    4
  ),
  (
    '2WK9RTS7O68VFKWD',
    2019,
    'Chrysler',
    '300S',
    'This Chrysler 300 S comes with Leather Seats, Alpine Sound System, Rear View Camera, Navigation System, Front Seat Heaters, A/C Seat(s) Automatic Transmission. Ride in comfort in this classic looking sedan.',
    '26998.00',
    40014,
    'Blue',
    7
  ),
  (
    '3T2TTTT42HN01GVD',
    2019,
    'Hyundai',
    'Elantra',
    'The 2019 Hyundai Elantra is a compact sedan that has been refreshed with a more angular appearance and sharp triangular headlights. It is powered by a 128-hp, turbocharged 1.4-liter four-cylinder joined to a seven-speed dual-clutch automatic in this ECO trim.',
    '19590.00',
    34109,
    'Red',
    7
  ),
  (
    '4K6WT4KJWS8D1K4Z',
    2019,
    'Ford',
    'Taurus',
    'The Taurus has one of the 10 Best Engines in vehicles today. It scores 29 Highway MPG and 19 City MPG! This Ford Taurus delivers a Gas V6 3.5L/213 engine powering this Automatic transmission. Vinyl-wrapped front center console -inc: armrest, front covered cupholders/storage bin, removable trinket tray, painted appliques, Universal garage door opener, Torque vectoring control.',
    '18195.00',
    28951,
    'Silver',
    7
  ),
  (
    '50SPI165C5EW9AA9',
    2016,
    'Subaru',
    'Outback',
    'This 2016 Subaru Outback 2.5I is equipped with Full Roof Rack, AWD, Rear View Camera, Front Seat Heaters, Auxiliary Audio Input, Alloy Wheels and variable speed transmission. Subaru vehicles hold their value and have a reputation for dependability. Come see this one.',
    '25998.00',
    57297,
    'Silver',
    1
  ),
  (
    '5UZE5GWGT8A9F787',
    2018,
    'Ford',
    'Edge',
    'This Ford Edge SEL is loaded with convenient features like backup camera, navigation system, remote start, alloy wheels, Ford sync, remote entry, power seats, along with beautiful Gray exterior and an Ebony interior.',
    '29800.00',
    58022,
    'Gray',
    1
  ),
  (
    '80KBY4LSKD9EXMVG',
    2018,
    'Hyundai',
    'Tucson',
    'The 2018 Hyundai Tucson\\\'s delivers good value while competing with rivals by offering a roomy and comfortable interior and a long list of available features.',
    '22000.00',
    19568,
    'White',
    1
  ),
  (
    '8TPH7FZU71L5COU6',
    2018,
    'GM',
    'Hummer',
    'Do you have 6 kids and like to go offroading? The Hummer gives you the large interior with an engine to get you out of any muddy or rocky situation.',
    '58800.00',
    59657,
    'Silver',
    5
  ),
  (
    '9XL63EK220DOGIMX',
    2018,
    'Chevy',
    'Camaro',
    'If you want to look cool this is the car you need! This car has great performance at an affordable price. Own it today!',
    '25000.00',
    105136,
    'Black',
    3
  ),
  (
    'CHOCO4W7M50M2B9I',
    2018,
    'GMC',
    'Yukon',
    'The Yukon projects a commanding presence on the road, and its most striking design elements include a massive grille, winged headlights, a body-colored front bumper, pronounced fenders and deep character lines on the edges of its hood. The SUV’s profile is upright and sturdy, with a blocky tail end. Standard 18-inch wheels ground the Yukon.',
    '53199.00',
    68777,
    'Black',
    1
  ),
  (
    'DXEU3TCEN4OL119O',
    2019,
    'Porsche',
    'Cayman',
    'A siren on wheels. It will lure you to the road, and you will never look back! The Cayman\\\'s joyful driving demeanor, powerful flat-four engines, and stunning styling make it a favorite for sports car enthusists.',
    '65000.00',
    71222,
    'Metalic blue',
    3
  ),
  (
    'DYDNKCN15NSTNJOK',
    2019,
    'Ford',
    'F250',
    'This Ford F250 Lariat with Long Bed, Bed Cover, 4WD/AWD, Leather Seats, Satellite Radio Ready, Parking Sensors. and Automatic transmission is ready to be put to work. It is a tough truck, but drives and rides like a luxury car. Come drive it.',
    '59998.00',
    22351,
    'Red',
    4
  ),
  (
    'E8ZB0S3GQCBQRA47',
    2017,
    'Toyota',
    'Highlander',
    'The Toyota Highlander is a versatile midsize SUV made for moving both people and things. With three rows of seats and solid hauling capabilities, this Highlander is ready for the road ahead. It is fully equipped with Leather Seats, Sunroof/Moonroof, Navigation System, Adaptive Cruise Control, Alloy Wheels, Third Row Seating, Bluetooth, Backup Camera, Blind Spot Monitoring, Heated Seats and 8-Speed Automatic tranmission.',
    '30900.00',
    55399,
    'Maroon',
    1
  ),
  (
    'FHSCZ7MKMZG6ER8H',
    2019,
    'Volkswagen',
    'Jetta',
    '2019 Volkswagen Jetta S with Turbo Charged Engine, Rear View Camera, Cruise Control, Auxiliary Audio Input, Alloy Wheels, Overhead Airbags. Transmission: Manual 6 Speed transmission. Sporty and responsive, come take a test drive.',
    '18998.00',
    25645,
    'Blue',
    7
  ),
  (
    'H49NRX52L4OUESON',
    2018,
    'BMW',
    'X6 M',
    'The 2018 BMW X6 M is the high-performance version of the standard BMW X6. The X6 M picks up where the xDrive50i ends, tweaking the turbocharged V8 engine to make a rip-roaring 567 horsepower. The result is a high-end hauler that does 0 to 60 mph in a physics-defying 4.1 seconds. Beyond added power, this ultra X6 gets the BMW M treatment that massages the chassis, transmission, all-wheel-drive system and other components for the highest performance.',
    '45247.00',
    50000,
    'White',
    1
  ),
  (
    'I3PS7D6EAS4E7UQO',
    2018,
    'Ford',
    'F150',
    'The best selling pickup in the United States for almost three decades, the Ford F150 XLT has it all - 4WD, Satellite Radio Ready, Rear View Camera, Bed Liner, Running Boards, Alloy Wheels, heavy duty suspension and an Automatic transmission. This one will leave our lot quickly, come and test drive it today.',
    '33000.00',
    61000,
    'Black',
    4
  ),
  (
    'IHATFI2FTFPUUWR8',
    2015,
    'Audi',
    'S4',
    'The Audi S4 is the high performance variant of Audi\'s compact executive car A4.',
    '53158.00',
    33900,
    'Blue',
    7
  ),
  (
    'ILWIDHFFF4OYISQK',
    2017,
    'Ford',
    'Explorer',
    'Ford Explorer Platinum with 4WD/AWD, Turbo Charged Engine, Leather Seats, Satellite Radio, Parking Sensors, Rear View Camera, and automatic transmission.',
    '39988.00',
    47619,
    'Black',
    1
  ),
  (
    'IZDAJCYH5FQW1CAX',
    2017,
    'Lamborghini',
    'Adventador',
    'This V-12 engine packs a punch in this sporty car. Make sure you wear your seatbelt and obey all traffic laws. ',
    '417650.00',
    2235,
    'White',
    3
  ),
  (
    'JD876EAQE8FKB0MZ',
    2019,
    'Porsche',
    '911',
    '2019 Porsche 911 Turbo Coupe AWD with Leather Seats, Sunroof/Moonroof, Navigation System, Alloy Wheels, Adaptive Suspension, Memory Package, Backup Camera, CarPlayCertified and 7-Speed Automatic transmission. Take a ride and feel the power and comfort.',
    '175900.00',
    3975,
    'Metallic Orange',
    3
  ),
  (
    'KH4ZZ6M4ACZOQKFA',
    2016,
    'Hyundai',
    'Veloster',
    'Hyundai is blurring class lines with the Veloster. It\'s got doors like a coupe yet it\'s shaped like a hatchback. No matter what it\'s called, the Veloster is designed to win over just about everyone. With attractive and unique asymmetrical styling and a sporty demeanor, the Veloster is loaded with standard features that set it apart. Add to that best-in-class interior volume and high-quality materials, the Hyundai Veloster is hard to beat. Strengths of this model include fuel efficiency, sleek, sporty styling, available technology, and interior space',
    '16900.00',
    13500,
    'Orange',
    7
  ),
  (
    'KJPD2845JNQTY3HJ',
    2016,
    'Honda',
    'Odyssey',
    '2016 Honda Odyssey SE with Power Sliding Door (s), Satellite Radio Ready, DVD Video System, Rear View Camera, Fold-Away Third Row, Quad Seats. Automatic Transmission. Perfect for a family.',
    '29998.00',
    40563,
    'Gray',
    5
  ),
  (
    'LHCUGZWFNZCQ3RJ8',
    2016,
    'GMC',
    'Sierra 1500',
    'The GMC Sierra is a heavy-duty pickup truck, which was redesigned in 2015. A true workhorse, designed for hauling heavy payloads and towing trailers up to 23,200 pounds.',
    '27815.00',
    49632,
    'Plum',
    4
  ),
  (
    'M7OU6QIZRCE96KOU',
    2006,
    'Monster',
    'Truck',
    'Most trucks are for working, this one is for fun. This beast comes with 60 inch tires giving you traction needed to jump and roll in the mud.',
    '150000.00',
    32489,
    'Blue',
    4
  ),
  (
    'MJVIDV0XHG4449U9',
    2016,
    'Hyundai',
    'Genesis Coupe',
    'Nodding to its GT predecessors’ road/race chassis, the Genesis sports coupe is elevated by progressive styling and modern innovation.',
    '54777.00',
    27995,
    'Blue',
    3
  ),
  (
    'MXWHWT39FZ6JYB9Z',
    2017,
    'Mercedes',
    'G',
    'Mercedes-Benz G AMG 63 with Leather Seats, Sunroof/Moonroof, Navigation System, Bluetooth, Backup Camera, Parking Sensors, Heated Seats, Multi Zone Climate Control, and 7-Speed Automatic transmission. Drive this high-end luxury car today.',
    '118000.00',
    14899,
    'White',
    6
  ),
  (
    'MZ4KKYUUV6KTID7C',
    2019,
    'Honda',
    'Insight',
    '2019 Honda Insight EX Sedan FWD with Adaptive Cruise Control, Alloy Wheels, Bluetooth, Backup Camera, Android Auto, CarPlay, Continuously Variable Transmission and hybrid electric motor assist. Economical to drive.',
    '24200.00',
    28815,
    'Red',
    8
  ),
  (
    'N9TF7X2XNOPHMOFW',
    2014,
    'Ford',
    'Crown Victoria',
    'After the police force updated their fleet these cars are now available to the public! These cars come equiped with the siren which is convenient for college students running late to class.',
    '10000.00',
    52154,
    'White',
    7
  ),
  (
    'O3FPPZT3WT49CH6R',
    2014,
    'Toyota',
    'Venza',
    '2013 Toyota Venza Limited V6 AWD has Leather Seats, Navigation System, Limited Package, Alloy Wheels, Bluetooth, Premium Wheels, Backup Camera, Heated Seats, 6-Speed Automatic transmission. Included is Toyota\'s legendary quality.',
    '19590.00',
    85366,
    'Silver',
    1
  ),
  (
    'OGGFDZ4LLXVS8IFL',
    2021,
    'Chrysler',
    'Pacifica',
    'This Chrysler Pacifica Touring-L comes with all the bells and whistles, including AWD, Roof Rack, DVD, Keyless Entry, Fog Lights, Spoiler, Leather Seats, Heated Seats, Heated Steering Wheel, Lane Assist and Bucket Seats. Besides all that, it gets 36 MPG with the hybrid engine. This will go fast.',
    '49950.00',
    8100,
    'Blue',
    8
  ),
  (
    'PHO71QLJENY8DNZF',
    1987,
    'Aerocar International',
    'Aerocar',
    'Are you sick of rush hour traffic? This car converts into an airplane to get you where you are going fast. Only 6 of these were made, get this rare, vehicle, while it lasts!',
    '1000000.00',
    16458,
    'Red',
    2
  ),
  (
    'QP1Q7YVT2VNZ9TAO',
    2017,
    'Chevrolet',
    'Malibu',
    'The 2017 Chevrolet Malibu is a front-wheel-drive midsize sedan that seats five passengers. The turbocharged four-cylinder engine is standard.',
    '71325.00',
    21000,
    'Blue',
    7
  ),
  (
    'R4QPNEYB8FR04MH0',
    2019,
    'Cadillac',
    'Escalade',
    'This stylin car is great for any occasion from going to the beach to meeting the president. The luxurious inside makes this car a home away from home.',
    '75195.00',
    48951,
    'Black',
    6
  ),
  (
    'RBGYTI9KA5J61JSM',
    2018,
    'Volkswagen',
    'Golf',
    '2018 Volkswagen Golf R 4-Door AWD with Sunroof/Moonroof, Navigation System, Adaptive Cruise Control, Alloy Wheels, Bluetooth, Adaptive Suspension, Backup Camera, Remote Start, Premium Package, Heated Seats, Cold Weather Package. Fantastic commuting vehicle.',
    '37995.00',
    25414,
    'Yellow',
    1
  ),
  (
    'RP2YPNOV4PTPWRX4',
    1921,
    'Ford',
    'Model T',
    'The Ford Model T can be a bit tricky to drive. It was the first car to be put into mass production. You can get it in any color you want as long as it\'s black.',
    '30000.00',
    2100,
    'Black',
    2
  ),
  (
    'T7KSKKROJHT0NT70',
    2013,
    'Volvo',
    'XC90',
    'Intuitively yours. Advanced technology helps connect your drive to personalized comfort and mobility.',
    '65321.00',
    45875,
    'White',
    8
  ),
  (
    'VYJNBY0DOWFY8ISO',
    2019,
    'Ford',
    'Escape',
    'This Ford Escape SE AWD comes with Adaptive Cruise Control, Alloy Wheels, Bluetooth, Backup Camera, Blind Spot Monitoring, Heated Seats and a 6-Speed Automatic transmission. It is super clean and ready to go home with you.',
    '14995.00',
    68521,
    'White',
    1
  ),
  (
    'W0C4AL34GL32MNKC',
    2021,
    'Honda',
    'Pilot',
    'Honda Pilot Elite AWD with Leather Seats, Sunroof/Moonroof, Navigation System, Alloy Wheels, Third Row Seating, Bluetooth, Backup Camera, Heated Seats, Android Auto, CarPlay, and a 9-Speed Automatic transmission. This Pilot can haul people, toys and gear. A perfect all around vehicle.',
    '42995.00',
    17881,
    'Black',
    5
  ),
  (
    'WJHXR08G8OOVS0US',
    2019,
    'Hyundai',
    'Venue',
    'Dependable, great economy, tons of room.',
    '29000.00',
    12689,
    'Blue',
    1
  ),
  (
    'WXKRRE5DFJODP76O',
    2018,
    'Jeep ',
    'Wrangler',
    'The Jeep Wrangler is small and compact with enough power to get you where you want to go. Its great for everyday driving as well as off roading, whether that be on the the rocks or in the mud!',
    '52621.00',
    28045,
    'Orange',
    1
  ),
  (
    'XER1Q3EBMBEBKR4V',
    1982,
    'DMC',
    'DeLorean',
    'Classic Back to the Future vehicle with a stainless steel body and gull wing doors. The Flux Capacitor is an add-on for this car.',
    '59500.00',
    38500,
    'Gunmetal Gray',
    2
  ),
  (
    'XH3TABLGEPGAZ9E1',
    2016,
    'Hyundai',
    'Accent',
    'The 2016 Accent hatchback offers 5 seating capacity that is ideal for a family car. Its upscale seat upholstery makes it comfortable. It also comes with satisfying safety features. For the infotainment system, it includes USB and Bluetooth connections for mobile devices as well as AM/FM radio and a CD player. The cabin also looks elegant and feels comfortable.',
    '16999.00',
    40081,
    'White',
    1
  ),
  (
    'XK1GOCNU04BESPML',
    2017,
    'Ford',
    'Transit Connect',
    'A hard to find 2017 Ford Transit Connect XLT High Roof, includes Satellite Radio Ready, Rear View Camera, Parking Sensors, Fold-Away Third Row, Quad Seats, Rear Air Conditioning, and Automatic Transmission. This van is a prime candidate for an RV conversion.',
    '24998.00',
    47453,
    'White',
    5
  ),
  (
    'XUYURBSQQIUO01O8',
    2017,
    'Porsche',
    'Panamera',
    'You have to drive this 2017 Porsche Panamera 4S AWD with Leather Seats, Driver Assistance Package, Sunroof/Moonroof, Navigation System, Alloy Wheels, Bluetooth, Backup Camera, Blind Spot Monitoring, Parking Sensors, CarPlay and Automatic transmission.',
    '88998.00',
    13074,
    'Black',
    3
  ),
  (
    'YFSZ83AQ4661H27A',
    2017,
    'Mercedes',
    'McLaren',
    'High end luxury car for the person who wants it all. This car is on consignment from Jay Leno.',
    '650000.00',
    21983,
    'Silver',
    6
  ),
  (
    'YJCPI2LGKL6IZ27S',
    2014,
    'Chevrolet',
    'Cruze',
    'Points in the 2014 Chevrolet Cruze\'s favor include a lineup of solid-performing, high-efficiency four-cylinder engines, a sophisticated ride and handling balance, and the car\'s sharp, non-gimmicky design inside and out. Passenger quarters are a smidge tight for this class, but most consumers will find them adequate. The Cruze also offers an unusually large trunk for a compact sedan.',
    '47223.00',
    18999,
    'Red',
    7
  ),
  (
    'ZOLTYL902ZIE6H1Z',
    2016,
    'Hyundai',
    'Equus',
    'The Hyundai Equus is a full-size luxury sedan with plenty of seating for up to five people. If you\'ve been looking for an indulgent sedan for your growing family, the 2016 Equus offers a spacious cabin with an additional 16.7 cubic feet of trunk space for groceries, sports gear, and more. Standard 60/40-split-folding seats also make it easy to extend trunk space for longer items as needed, making this sedan as versatile as it is elegant.',
    '41588.00',
    25000,
    'Black',
    7
  );
  
-- --------------------------------------------------------
--
-- Table structure for table `carclassification`
--
CREATE TABLE `carclassification` (
  `classificationId` INT(3) UNSIGNED AUTO_INCREMENT NOT NULL,
  `classificationName` varchar(30) NOT NULL,
  PRIMARY KEY (`classificationId`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `carclassification`
--
INSERT INTO `carclassification` (`classificationId`, `classificationName`)
VALUES (1, 'SUV'),
  (2, 'Classic'),
  (3, 'Sport'),
  (4, 'Truck'),
  (5, 'Van'),
  (6, 'Luxury'),
  (7, 'Sedan'),
  (8, 'Hybrid');
--
-- --------------------------------------------------------
--
-- Table structure for table `images`
--
CREATE TABLE `images` (
  `imgId` int UNSIGNED NOT NULL,
  `invId` varchar(20) NOT NULL,
  `imgName` varchar(100) NOT NULL,
  `imgPath` varchar(150) NOT NULL,
  `imgDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
--
-- Dumping data for table `images`
--
INSERT INTO `images` (
    `imgId`,
    `invId`,
    `imgName`,
    `imgPath`,
    `imgDate`
  )
VALUES (
    1,
    '0TWWOKV6V9YE8EAN',
    '1986-mystery-van.jpg',
    '/phpmotors/images/vehicles/1986-mystery-van.jpg',
    '2021-11-24 20:11:15'
  ),
  (
    2,
    '0TWWOKV6V9YE8EAN',
    '1986-mystery-van-tn.jpg',
    '/phpmotors/images/vehicles/1986-mystery-van-tn.jpg',
    '2021-11-24 20:11:15'
  ),
  (
    3,
    'RP2YPNOV4PTPWRX4',
    '1921-ford-model-t.jpg',
    '/phpmotors/images/vehicles/1921-ford-model-t.jpg',
    '2021-11-24 20:12:14'
  ),
  (
    4,
    'RP2YPNOV4PTPWRX4',
    '1921-ford-model-t-tn.jpg',
    '/phpmotors/images/vehicles/1921-ford-model-t-tn.jpg',
    '2021-11-24 20:12:14'
  ),
  (
    5,
    'XER1Q3EBMBEBKR4V',
    '1982-dmc-delorean.jpg',
    '/phpmotors/images/vehicles/1982-dmc-delorean.jpg',
    '2021-11-24 20:14:50'
  ),
  (
    6,
    'XER1Q3EBMBEBKR4V',
    '1982-dmc-delorean-tn.jpg',
    '/phpmotors/images/vehicles/1982-dmc-delorean-tn.jpg',
    '2021-11-24 20:14:50'
  ),
  (
    7,
    'PHO71QLJENY8DNZF',
    '1987-ai-aerocar.jpg',
    '/phpmotors/images/vehicles/1987-ai-aerocar.jpg',
    '2021-11-24 20:15:08'
  ),
  (
    8,
    'PHO71QLJENY8DNZF',
    '1987-ai-aerocar-tn.jpg',
    '/phpmotors/images/vehicles/1987-ai-aerocar-tn.jpg',
    '2021-11-24 20:15:08'
  ),
  (
    9,
    'M7OU6QIZRCE96KOU',
    '2006-monster-truck.jpg',
    '/phpmotors/images/vehicles/2006-monster-truck.jpg',
    '2021-11-24 20:15:28'
  ),
  (
    10,
    'M7OU6QIZRCE96KOU',
    '2006-monster-truck-tn.jpg',
    '/phpmotors/images/vehicles/2006-monster-truck-tn.jpg',
    '2021-11-24 20:15:28'
  ),
  (
    11,
    'N9TF7X2XNOPHMOFW',
    '2014-ford-crown-victoria.jpg',
    '/phpmotors/images/vehicles/2014-ford-crown-victoria.jpg',
    '2021-11-24 20:15:45'
  ),
  (
    12,
    'N9TF7X2XNOPHMOFW',
    '2014-ford-crown-victoria-tn.jpg',
    '/phpmotors/images/vehicles/2014-ford-crown-victoria-tn.jpg',
    '2021-11-24 20:15:45'
  ),
  (
    13,
    'IZDAJCYH5FQW1CAX',
    '2017-lamborghini-adventador.jpg',
    '/phpmotors/images/vehicles/2017-lamborghini-adventador.jpg',
    '2021-11-24 20:16:07'
  ),
  (
    14,
    'IZDAJCYH5FQW1CAX',
    '2017-lamborghini-adventador-tn.jpg',
    '/phpmotors/images/vehicles/2017-lamborghini-adventador-tn.jpg',
    '2021-11-24 20:16:07'
  ),
  (
    15,
    '9XL63EK220DOGIMX',
    '2018-chevy-camaro.jpg',
    '/phpmotors/images/vehicles/2018-chevy-camaro.jpg',
    '2021-11-24 20:16:25'
  ),
  (
    16,
    '9XL63EK220DOGIMX',
    '2018-chevy-camaro-tn.jpg',
    '/phpmotors/images/vehicles/2018-chevy-camaro-tn.jpg',
    '2021-11-24 20:16:25'
  ),
  (
    17,
    '8TPH7FZU71L5COU6',
    '2018-gm-hummer.jpg',
    '/phpmotors/images/vehicles/2018-gm-hummer.jpg',
    '2021-11-24 20:16:42'
  ),
  (
    18,
    '8TPH7FZU71L5COU6',
    '2018-gm-hummer-tn.jpg',
    '/phpmotors/images/vehicles/2018-gm-hummer-tn.jpg',
    '2021-11-24 20:16:42'
  ),
  (
    19,
    'WXKRRE5DFJODP76O',
    '2018-jeep-wrangler.jpg',
    '/phpmotors/images/vehicles/2018-jeep-wrangler.jpg',
    '2021-11-24 20:17:01'
  ),
  (
    20,
    'WXKRRE5DFJODP76O',
    '2018-jeep-wrangler-tn.jpg',
    '/phpmotors/images/vehicles/2018-jeep-wrangler-tn.jpg',
    '2021-11-24 20:17:01'
  ),
  (
    21,
    'R4QPNEYB8FR04MH0',
    '2019-cadillac-escalade.jpg',
    '/phpmotors/images/vehicles/2019-cadillac-escalade.jpg',
    '2021-11-24 20:17:22'
  ),
  (
    22,
    'R4QPNEYB8FR04MH0',
    '2019-cadillac-escalade-tn.jpg',
    '/phpmotors/images/vehicles/2019-cadillac-escalade-tn.jpg',
    '2021-11-24 20:17:22'
  ),
  (
    23,
    'T7KSKKROJHT0NT70',
    '2013-volvo-xc90.jpg',
    '/phpmotors/images/vehicles/2013-volvo-xc90.jpg',
    '2021-11-24 21:07:32'
  ),
  (
    24,
    'T7KSKKROJHT0NT70',
    '2013-volvo-xc90-tn.jpg',
    '/phpmotors/images/vehicles/2013-volvo-xc90-tn.jpg',
    '2021-11-24 21:07:32'
  ),
  (
    25,
    'YJCPI2LGKL6IZ27S',
    '2014-chevy-cruze.jpg',
    '/phpmotors/images/vehicles/2014-chevy-cruze.jpg',
    '2021-11-24 21:07:56'
  ),
  (
    26,
    'YJCPI2LGKL6IZ27S',
    '2014-chevy-cruze-tn.jpg',
    '/phpmotors/images/vehicles/2014-chevy-cruze-tn.jpg',
    '2021-11-24 21:07:56'
  ),
  (
    27,
    'O3FPPZT3WT49CH6R',
    '2014-toyota-vneza.jpg',
    '/phpmotors/images/vehicles/2014-toyota-vneza.jpg',
    '2021-11-24 21:08:25'
  ),
  (
    28,
    'O3FPPZT3WT49CH6R',
    '2014-toyota-vneza-tn.jpg',
    '/phpmotors/images/vehicles/2014-toyota-vneza-tn.jpg',
    '2021-11-24 21:08:25'
  ),
  (
    29,
    'IHATFI2FTFPUUWR8',
    '2015-audi-s4.jpg',
    '/phpmotors/images/vehicles/2015-audi-s4.jpg',
    '2021-11-24 21:08:46'
  ),
  (
    30,
    'IHATFI2FTFPUUWR8',
    '2015-audi-s4-tn.jpg',
    '/phpmotors/images/vehicles/2015-audi-s4-tn.jpg',
    '2021-11-24 21:08:46'
  ),
  (
    31,
    'LHCUGZWFNZCQ3RJ8',
    '2016-gmc-sierra.jpg',
    '/phpmotors/images/vehicles/2016-gmc-sierra.jpg',
    '2021-11-24 21:09:09'
  ),
  (
    32,
    'LHCUGZWFNZCQ3RJ8',
    '2016-gmc-sierra-tn.jpg',
    '/phpmotors/images/vehicles/2016-gmc-sierra-tn.jpg',
    '2021-11-24 21:09:09'
  ),
  (
    33,
    'KJPD2845JNQTY3HJ',
    '2016-honda-odyssey.jpg',
    '/phpmotors/images/vehicles/2016-honda-odyssey.jpg',
    '2021-11-24 21:09:29'
  ),
  (
    34,
    'KJPD2845JNQTY3HJ',
    '2016-honda-odyssey-tn.jpg',
    '/phpmotors/images/vehicles/2016-honda-odyssey-tn.jpg',
    '2021-11-24 21:09:29'
  ),
  (
    35,
    'XH3TABLGEPGAZ9E1',
    '2016-hyundai-accent.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-accent.jpg',
    '2021-11-24 21:09:59'
  ),
  (
    36,
    'XH3TABLGEPGAZ9E1',
    '2016-hyundai-accent-tn.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-accent-tn.jpg',
    '2021-11-24 21:09:59'
  ),
  (
    37,
    'ZOLTYL902ZIE6H1Z',
    '2016-hyundai-equus.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-equus.jpg',
    '2021-11-24 21:10:19'
  ),
  (
    38,
    'ZOLTYL902ZIE6H1Z',
    '2016-hyundai-equus-tn.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-equus-tn.jpg',
    '2021-11-24 21:10:19'
  ),
  (
    39,
    'MJVIDV0XHG4449U9',
    '2016-hyundai-genesis.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-genesis.jpg',
    '2021-11-24 21:10:37'
  ),
  (
    40,
    'MJVIDV0XHG4449U9',
    '2016-hyundai-genesis-tn.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-genesis-tn.jpg',
    '2021-11-24 21:10:37'
  ),
  (
    41,
    'KH4ZZ6M4ACZOQKFA',
    '2016-hyundai-veloster.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-veloster.jpg',
    '2021-11-24 21:10:57'
  ),
  (
    42,
    'KH4ZZ6M4ACZOQKFA',
    '2016-hyundai-veloster-tn.jpg',
    '/phpmotors/images/vehicles/2016-hyundai-veloster-tn.jpg',
    '2021-11-24 21:10:57'
  ),
  (
    43,
    '50SPI165C5EW9AA9',
    '2016-subaru-outback.jpg',
    '/phpmotors/images/vehicles/2016-subaru-outback.jpg',
    '2021-11-24 21:11:15'
  ),
  (
    44,
    '50SPI165C5EW9AA9',
    '2016-subaru-outback-tn.jpg',
    '/phpmotors/images/vehicles/2016-subaru-outback-tn.jpg',
    '2021-11-24 21:11:15'
  ),
  (
    45,
    'QP1Q7YVT2VNZ9TAO',
    '2017-chevy-malibu.jpg',
    '/phpmotors/images/vehicles/2017-chevy-malibu.jpg',
    '2021-11-24 21:11:35'
  ),
  (
    46,
    'QP1Q7YVT2VNZ9TAO',
    '2017-chevy-malibu-tn.jpg',
    '/phpmotors/images/vehicles/2017-chevy-malibu-tn.jpg',
    '2021-11-24 21:11:35'
  ),
  (
    47,
    '0HT5F99KUZUOY2GO',
    '2017-chevy-tahoe.jpg',
    '/phpmotors/images/vehicles/2017-chevy-tahoe.jpg',
    '2021-11-24 21:11:54'
  ),
  (
    48,
    '0HT5F99KUZUOY2GO',
    '2017-chevy-tahoe-tn.jpg',
    '/phpmotors/images/vehicles/2017-chevy-tahoe-tn.jpg',
    '2021-11-24 21:11:54'
  ),
  (
    49,
    'ILWIDHFFF4OYISQK',
    '2017-ford-explorer.jpg',
    '/phpmotors/images/vehicles/2017-ford-explorer.jpg',
    '2021-11-24 21:12:19'
  ),
  (
    50,
    'ILWIDHFFF4OYISQK',
    '2017-ford-explorer-tn.jpg',
    '/phpmotors/images/vehicles/2017-ford-explorer-tn.jpg',
    '2021-11-24 21:12:19'
  ),
  (
    51,
    'XK1GOCNU04BESPML',
    '2017-ford-transit.jpg',
    '/phpmotors/images/vehicles/2017-ford-transit.jpg',
    '2021-11-24 21:12:38'
  ),
  (
    52,
    'XK1GOCNU04BESPML',
    '2017-ford-transit-tn.jpg',
    '/phpmotors/images/vehicles/2017-ford-transit-tn.jpg',
    '2021-11-24 21:12:38'
  ),
  (
    53,
    'XUYURBSQQIUO01O8',
    '2017-porsche-panamera.jpg',
    '/phpmotors/images/vehicles/2017-porsche-panamera.jpg',
    '2021-11-24 21:13:20'
  ),
  (
    54,
    'XUYURBSQQIUO01O8',
    '2017-porsche-panamera-tn.jpg',
    '/phpmotors/images/vehicles/2017-porsche-panamera-tn.jpg',
    '2021-11-24 21:13:20'
  ),
  (
    55,
    'E8ZB0S3GQCBQRA47',
    '2017-toyota-highlander.jpg',
    '/phpmotors/images/vehicles/2017-toyota-highlander.jpg',
    '2021-11-24 21:13:43'
  ),
  (
    56,
    'E8ZB0S3GQCBQRA47',
    '2017-toyota-highlander-tn.jpg',
    '/phpmotors/images/vehicles/2017-toyota-highlander-tn.jpg',
    '2021-11-24 21:13:43'
  ),
  (
    57,
    '197K189P52LJFOUE',
    '2018-bmw-x5.jpg',
    '/phpmotors/images/vehicles/2018-bmw-x5.jpg',
    '2021-11-24 21:14:19'
  ),
  (
    58,
    '197K189P52LJFOUE',
    '2018-bmw-x5-tn.jpg',
    '/phpmotors/images/vehicles/2018-bmw-x5-tn.jpg',
    '2021-11-24 21:14:19'
  ),
  (
    59,
    'H49NRX52L4OUESON',
    '2018-bmw-x6.jpg',
    '/phpmotors/images/vehicles/2018-bmw-x6.jpg',
    '2021-11-24 21:14:51'
  ),
  (
    60,
    'H49NRX52L4OUESON',
    '2018-bmw-x6-tn.jpg',
    '/phpmotors/images/vehicles/2018-bmw-x6-tn.jpg',
    '2021-11-24 21:14:51'
  ),
  (
    61,
    '5UZE5GWGT8A9F787',
    '2018-ford-edge.jpg',
    '/phpmotors/images/vehicles/2018-ford-edge.jpg',
    '2021-11-24 21:15:12'
  ),
  (
    62,
    '5UZE5GWGT8A9F787',
    '2018-ford-edge-tn.jpg',
    '/phpmotors/images/vehicles/2018-ford-edge-tn.jpg',
    '2021-11-24 21:15:12'
  ),
  (
    63,
    'I3PS7D6EAS4E7UQO',
    '2018-ford-f150.jpg',
    '/phpmotors/images/vehicles/2018-ford-f150.jpg',
    '2021-11-24 21:16:31'
  ),
  (
    64,
    'I3PS7D6EAS4E7UQO',
    '2018-ford-f150-tn.jpg',
    '/phpmotors/images/vehicles/2018-ford-f150-tn.jpg',
    '2021-11-24 21:16:31'
  ),
  (
    65,
    'CHOCO4W7M50M2B9I',
    '2018-gmc-yukon.jpg',
    '/phpmotors/images/vehicles/2018-gmc-yukon.jpg',
    '2021-11-24 21:16:50'
  ),
  (
    66,
    'CHOCO4W7M50M2B9I',
    '2018-gmc-yukon-tn.jpg',
    '/phpmotors/images/vehicles/2018-gmc-yukon-tn.jpg',
    '2021-11-24 21:16:50'
  ),
  (
    67,
    'RBGYTI9KA5J61JSM',
    '2018-volkswagen-golf.jpg',
    '/phpmotors/images/vehicles/2018-volkswagen-golf.jpg',
    '2021-11-24 21:17:11'
  ),
  (
    68,
    'RBGYTI9KA5J61JSM',
    '2018-volkswagen-golf-tn.jpg',
    '/phpmotors/images/vehicles/2018-volkswagen-golf-tn.jpg',
    '2021-11-24 21:17:11'
  ),
  (
    69,
    '2WK9RTS7O68VFKWD',
    '2019-chrysler-300.jpg',
    '/phpmotors/images/vehicles/2019-chrysler-300.jpg',
    '2021-11-24 21:17:31'
  ),
  (
    70,
    '2WK9RTS7O68VFKWD',
    '2019-chrysler-300-tn.jpg',
    '/phpmotors/images/vehicles/2019-chrysler-300-tn.jpg',
    '2021-11-24 21:17:31'
  ),
  (
    71,
    'VYJNBY0DOWFY8ISO',
    '2019-ford-escape.jpg',
    '/phpmotors/images/vehicles/2019-ford-escape.jpg',
    '2021-11-24 21:17:51'
  ),
  (
    72,
    'VYJNBY0DOWFY8ISO',
    '2019-ford-escape-tn.jpg',
    '/phpmotors/images/vehicles/2019-ford-escape-tn.jpg',
    '2021-11-24 21:17:51'
  ),
  (
    73,
    'DYDNKCN15NSTNJOK',
    '2019-ford-f250.jpg',
    '/phpmotors/images/vehicles/2019-ford-f250.jpg',
    '2021-11-24 21:18:09'
  ),
  (
    74,
    'DYDNKCN15NSTNJOK',
    '2019-ford-f250-tn.jpg',
    '/phpmotors/images/vehicles/2019-ford-f250-tn.jpg',
    '2021-11-24 21:18:09'
  ),
  (
    75,
    '4K6WT4KJWS8D1K4Z',
    '2019-ford-taurus.jpg',
    '/phpmotors/images/vehicles/2019-ford-taurus.jpg',
    '2021-11-24 21:18:29'
  ),
  (
    76,
    '4K6WT4KJWS8D1K4Z',
    '2019-ford-taurus-tn.jpg',
    '/phpmotors/images/vehicles/2019-ford-taurus-tn.jpg',
    '2021-11-24 21:18:29'
  ),
  (
    77,
    'MZ4KKYUUV6KTID7C',
    '2019-honda-insight.jpg',
    '/phpmotors/images/vehicles/2019-honda-insight.jpg',
    '2021-11-24 21:18:48'
  ),
  (
    78,
    'MZ4KKYUUV6KTID7C',
    '2019-honda-insight-tn.jpg',
    '/phpmotors/images/vehicles/2019-honda-insight-tn.jpg',
    '2021-11-24 21:18:48'
  ),
  (
    79,
    '3T2TTTT42HN01GVD',
    '2019-hyundai-elantra.jpg',
    '/phpmotors/images/vehicles/2019-hyundai-elantra.jpg',
    '2021-11-24 21:19:06'
  ),
  (
    80,
    '3T2TTTT42HN01GVD',
    '2019-hyundai-elantra-tn.jpg',
    '/phpmotors/images/vehicles/2019-hyundai-elantra-tn.jpg',
    '2021-11-24 21:19:06'
  ),
  (
    81,
    '04I2IRQWSQ2QTYWT',
    '2019-hyundai-sonata.jpg',
    '/phpmotors/images/vehicles/2019-hyundai-sonata.jpg',
    '2021-11-24 21:19:34'
  ),
  (
    82,
    '04I2IRQWSQ2QTYWT',
    '2019-hyundai-sonata-tn.jpg',
    '/phpmotors/images/vehicles/2019-hyundai-sonata-tn.jpg',
    '2021-11-24 21:19:34'
  ),
  (
    83,
    'JD876EAQE8FKB0MZ',
    '2019-porsche-911.jpg',
    '/phpmotors/images/vehicles/2019-porsche-911.jpg',
    '2021-11-24 21:19:54'
  ),
  (
    84,
    'JD876EAQE8FKB0MZ',
    '2019-porsche-911-tn.jpg',
    '/phpmotors/images/vehicles/2019-porsche-911-tn.jpg',
    '2021-11-24 21:19:54'
  ),
  (
    85,
    'FHSCZ7MKMZG6ER8H',
    '2019-volkswagen-jetta.jpg',
    '/phpmotors/images/vehicles/2019-volkswagen-jetta.jpg',
    '2021-11-24 21:20:13'
  ),
  (
    86,
    'FHSCZ7MKMZG6ER8H',
    '2019-volkswagen-jetta-tn.jpg',
    '/phpmotors/images/vehicles/2019-volkswagen-jetta-tn.jpg',
    '2021-11-24 21:20:13'
  ),
  (
    87,
    'OGGFDZ4LLXVS8IFL',
    '2021-chrysler-pacifica.jpg',
    '/phpmotors/images/vehicles/2021-chrysler-pacifica.jpg',
    '2021-11-24 21:20:30'
  ),
  (
    88,
    'OGGFDZ4LLXVS8IFL',
    '2021-chrysler-pacifica-tn.jpg',
    '/phpmotors/images/vehicles/2021-chrysler-pacifica-tn.jpg',
    '2021-11-24 21:20:30'
  ),
  (
    89,
    '279T4IXN4LTBEXKM',
    '2021-ford-maverick.jpg',
    '/phpmotors/images/vehicles/2021-ford-maverick.jpg',
    '2021-11-24 21:20:48'
  ),
  (
    90,
    '279T4IXN4LTBEXKM',
    '2021-ford-maverick-tn.jpg',
    '/phpmotors/images/vehicles/2021-ford-maverick-tn.jpg',
    '2021-11-24 21:20:48'
  ),
  (
    91,
    'W0C4AL34GL32MNKC',
    '2021-honda-pilot.jpg',
    '/phpmotors/images/vehicles/2021-honda-pilot.jpg',
    '2021-11-24 21:21:06'
  ),
  (
    92,
    'W0C4AL34GL32MNKC',
    '2021-honda-pilot-tn.jpg',
    '/phpmotors/images/vehicles/2021-honda-pilot-tn.jpg',
    '2021-11-24 21:21:06'
  ),
  (
    93,
    '1L5UQBY50QF364W8',
    '2015-mercedes-e.jpg',
    '/phpmotors/images/vehicles/2015-mercedes-e.jpg',
    '2021-11-24 22:01:45'
  ),
  (
    94,
    '1L5UQBY50QF364W8',
    '2015-mercedes-e-tn.jpg',
    '/phpmotors/images/vehicles/2015-mercedes-e-tn.jpg',
    '2021-11-24 22:01:45'
  ),
  (
    95,
    'MXWHWT39FZ6JYB9Z',
    '2017-mercedes-g.jpg',
    '/phpmotors/images/vehicles/2017-mercedes-g.jpg',
    '2021-11-24 22:04:26'
  ),
  (
    96,
    'MXWHWT39FZ6JYB9Z',
    '2017-mercedes-g-tn.jpg',
    '/phpmotors/images/vehicles/2017-mercedes-g-tn.jpg',
    '2021-11-24 22:04:26'
  ),
  (
    97,
    'YFSZ83AQ4661H27A',
    '2017-mercedes-mclaren.jpg',
    '/phpmotors/images/vehicles/2017-mercedes-mclaren.jpg',
    '2021-11-24 22:05:06'
  ),
  (
    98,
    'YFSZ83AQ4661H27A',
    '2017-mercedes-mclaren-tn.jpg',
    '/phpmotors/images/vehicles/2017-mercedes-mclaren-tn.jpg',
    '2021-11-24 22:05:06'
  ),
  (
    99,
    '80KBY4LSKD9EXMVG',
    '2018-hyundai-tucson.jpg',
    '/phpmotors/images/vehicles/2018-hyundai-tucson.jpg',
    '2021-11-24 22:06:16'
  ),
  (
    100,
    '80KBY4LSKD9EXMVG',
    '2018-hyundai-tucson-tn.jpg',
    '/phpmotors/images/vehicles/2018-hyundai-tucson-tn.jpg',
    '2021-11-24 22:06:16'
  ),
  (
    101,
    'WJHXR08G8OOVS0US',
    '2019-hyundai-venue.jpg',
    '/phpmotors/images/vehicles/2019-hyundai-venue.jpg',
    '2021-11-24 22:09:36'
  ),
  (
    102,
    'WJHXR08G8OOVS0US',
    '2019-hyundai-venue-tn.jpg',
    '/phpmotors/images/vehicles/2019-hyundai-venue-tn.jpg',
    '2021-11-24 22:09:36'
  ),
  (
    103,
    'DXEU3TCEN4OL119O',
    '2019-porsche-cayman.jpg',
    '/phpmotors/images/vehicles/2019-porsche-cayman.jpg',
    '2021-11-24 22:10:05'
  ),
  (
    104,
    'DXEU3TCEN4OL119O',
    '2019-porsche-cayman-tn.jpg',
    '/phpmotors/images/vehicles/2019-porsche-cayman-tn.jpg',
    '2021-11-24 22:10:05'
  );
-- ------------------------------------------------------------------
--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
ADD KEY `classificationId` (`classificationId`);
--
-- Indexes for table `images`
--
ALTER TABLE `images`
ADD PRIMARY KEY (`imgId`),
  ADD KEY `FK_invId` (`invId`);
-- ------------------------------------------------------------------  
--
-- AUTO_INCREMENT for table `carclassification`
--
ALTER TABLE `carclassification`
MODIFY `classificationId` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  AUTO_INCREMENT = 9;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `imgId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 105;
-- ------------------------------------------------------------------   
--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
ADD CONSTRAINT `inventory_fk_1` FOREIGN KEY (`classificationId`) REFERENCES `carclassification` (`classificationId`);
--
-- Constraints for table `images`
--
ALTER TABLE `images`
ADD CONSTRAINT `FK_invId` FOREIGN KEY (`invId`) REFERENCES `inventory` (`invId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;