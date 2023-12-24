-- MySQL dump 10.13  Distrib 8.2.0, for Linux (aarch64)
--
-- Host: localhost    Database: database
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'adventure123@example.com','Hello! I had an amazing adventure today, everything was perfect.'),(2,2,'sunnygirl89@email.com','It\'s a sunny day and I\'m in a great mood.'),(3,3,'codingwizard7@domain.com','I enjoy coding, started a new project today.'),(4,4,'musiclover22@example.org','I enjoyed listening to music today, my favorite songs...'),(5,5,'skywalker45@email.com','I was amazed by the clouds in the sky today.'),(6,6,'bookworm88@domain.com','Discovered a new book, got lost in its pages.'),(7,7,'gamerpro11@example.org','Had a lot of fun playing games, tried a few new strategies.'),(8,8,'naturefan33@email.com','Took a long walk in nature, the scenery was breathtaking.'),(9,9,'artista27@domain.com','Created a new painting, art is my passion.'),(10,10,'techgeek76@example.org','Learned some new tech facts today, really interesting.'),(11,1,'adventure123@example.com','Hello! I had an amazing adventure today, everything was perfect.'),(12,2,'sunnygirl89@email.com','It\'s a sunny day and I\'m in a great mood.'),(13,3,'codingwizard7@domain.com','I enjoy coding, started a new project today.'),(14,4,'musiclover22@example.org','I enjoyed listening to music today, my favorite songs...'),(15,5,'skywalker45@email.com','I was amazed by the clouds in the sky today.'),(16,6,'bookworm88@domain.com','Discovered a new book, got lost in its pages.'),(17,7,'gamerpro11@example.org','Had a lot of fun playing games, tried a few new strategies.'),(18,8,'naturefan33@email.com','Took a long walk in nature, the scenery was breathtaking.'),(19,9,'artista27@domain.com','Created a new painting, art is my passion.'),(20,10,'techgeek76@example.org','Learned some new tech facts today, really interesting.'),(21,100,'diyenthusiast17@email.com','Completed my own project, crafts are my passion.'),(22,100,'adventure123@example.com','Today was another adventurous day!'),(23,60,'sunnygirl89@email.com','Feeling even better than yesterday.'),(24,78,'codingwizard7@domain.com','Continuing to work on my coding skills.'),(25,90,'musiclover22@example.org','Music always brightens my day.'),(26,95,'skywalker45@email.com','The sky looked different today.'),(27,4,'bookworm88@domain.com','Explored a different genre of books.'),(28,9,'diyenthusiast17@email.com','Experimenting with new crafting techniques.'),(29,49,'adventure123@example.com','Another adventurous day filled with excitement!'),(30,73,'sunnygirl89@email.com','Feeling positively radiant today.'),(31,15,'codingwizard7@domain.com','Coding marathon continues, making significant progress.'),(32,92,'musiclover22@example.org','Explored some new music genres, found a few favorites.'),(33,36,'skywalker45@email.com','Witnessed a breathtaking sunset.'),(34,62,'bookworm88@domain.com','Found a book that\'s hard to put down.'),(35,28,'gamerpro11@example.org','Gaming skills improving with each challenge.'),(36,86,'naturefan33@email.com','Nature never ceases to amaze me.'),(37,55,'artista27@domain.com','Experimenting with a new art style.'),(38,11,'techgeek76@example.org','Discovered fascinating tech innovations today.'),(39,77,'diyenthusiast17@email.com','Starting a new DIY project, full of enthusiasm.'),(40,32,'adventure123@example.com','Exploring unknown territories.'),(41,67,'sunnygirl89@email.com','Each day brings new opportunities.'),(42,23,'codingwizard7@domain.com','Challenging myself with complex coding problems.'),(43,98,'musiclover22@example.org','Music is the ultimate stress buster.'),(44,41,'skywalker45@email.com','Captured some amazing photos today.'),(45,50,'bookworm88@domain.com','A book that keeps me guessing until the end.'),(46,67,'diyenthusiast17@email.com','Turning ideas into creative DIY projects.'),(47,27,'adventure123@example.com','Another thrilling adventure today!'),(48,68,'sunnygirl89@email.com','Feeling fantastic and full of energy.'),(49,13,'codingwizard7@domain.com','Making great strides in coding, feeling accomplished.'),(50,89,'musiclover22@example.org','Discovered some incredible new tunes.'),(51,45,'skywalker45@email.com','Nature\'s beauty is simply mesmerizing.'),(52,61,'bookworm88@domain.com','Can\'t stop reading this gripping book.'),(53,31,'gamerpro11@example.org','Mastering new gaming strategies.'),(54,85,'naturefan33@email.com','Connecting with nature, feeling serene.'),(55,57,'artista27@domain.com','Exploring diverse art techniques.'),(56,14,'techgeek76@example.org','Tech world never fails to amaze.'),(57,80,'diyenthusiast17@email.com','Creating something new brings joy.'),(58,36,'adventure123@example.com','Venturing into uncharted territories.'),(59,72,'sunnygirl89@email.com','Embracing new experiences every day.'),(60,21,'codingwizard7@domain.com','Solving complex coding puzzles.'),(61,99,'musiclover22@example.org','Music is my daily companion.'),(62,49,'skywalker45@email.com','A day filled with nature\'s wonders.'),(63,59,'bookworm88@domain.com','Lost in the pages of an intriguing novel.'),(64,46,'diyenthusiast17@email.com','Innovating with DIY projects.'),(65,33,'adventure123@example.com','Enjoyed an adventurous day exploring new trails.'),(66,85,'sunnygirl89@email.com','Feeling amazing, the sun is shining so bright today!'),(67,18,'codingwizard7@domain.com','Successfully tackled a complex coding challenge.'),(68,97,'musiclover22@example.org','Found some fantastic beats, new favorites!'),(69,58,'skywalker45@email.com','The sky was a canvas of colors today.'),(70,72,'bookworm88@domain.com','Lost track of time diving into a captivating story.'),(71,42,'gamerpro11@example.org','Achieved new high scores, mastering my games.'),(72,93,'naturefan33@email.com','Serene moments in nature, deeply refreshing.'),(73,63,'artista27@domain.com','Experimenting with unique art styles, truly inspiring.'),(74,25,'techgeek76@example.org','Latest tech advancements continue to amaze me.'),(75,92,'diyenthusiast17@email.com','Creating something entirely new brings immense joy.'),(76,47,'adventure123@example.com','Exploring hidden gems off the beaten path.'),(77,81,'sunnygirl89@email.com','Each day brings new opportunities for growth.'),(78,31,'codingwizard7@domain.com','Unraveling complex coding problems, feeling accomplished.'),(79,105,'musiclover22@example.org','Music accompanies every moment, a true companion.'),(80,62,'skywalker45@email.com','Nature\'s wonders never cease to amaze.'),(81,77,'bookworm88@domain.com','Completely absorbed in an enchanting novel.'),(82,35,'diyenthusiast17@email.com','Exploring innovative DIY techniques, endless possibilities.'),(83,44,'adventure123@example.com','Explored breathtaking trails, what an adventure!'),(84,89,'sunnygirl89@email.com','Feeling absolutely ecstatic, the sun brightens my day!'),(85,22,'codingwizard7@domain.com','Accomplished a challenging coding task, feeling proud.'),(86,57,'skywalker45@email.com','Today\'s sky was a masterpiece of colors.'),(87,74,'bookworm88@domain.com','Engrossed in an enthralling story, lost track of time.'),(88,49,'gamerpro11@example.org','Achieved impressive gaming milestones, level up!'),(89,66,'artista27@domain.com','Experimenting with art, exploring new creative avenues.'),(90,31,'techgeek76@example.org','Mind-blowing tech advancements continue to inspire.'),(91,99,'diyenthusiast17@email.com','Crafting something new sparks joy and creativity.'),(92,52,'adventure123@example.com','Ventured into the unknown, discovered hidden beauty.'),(93,88,'sunnygirl89@email.com','Every day presents opportunities for personal growth.'),(94,29,'codingwizard7@domain.com','Overcame coding challenges, feeling accomplished.'),(95,61,'skywalker45@email.com','Nature\'s wonders are an endless delight.'),(96,84,'bookworm88@domain.com','Engrossed in a captivating narrative.'),(97,55,'adventure123@example.com','Explored stunning landscapes, a day filled with wonder.'),(98,92,'sunnygirl89@email.com','Feeling incredibly joyful, the sun\'s warmth is energizing!'),(99,28,'codingwizard7@domain.com','Solved a complex coding puzzle, a great sense of achievement.'),(100,54,'gamerpro11@example.org','Pushed my gaming skills to new heights, victory is sweet!');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Beautiful Day at the Beach','Spent the day relaxing by the sea.',3),(2,'Exploring New Coding Techniques','Trying out some advanced algorithms today.',8),(3,'Concert Night Fun','The live music was amazing!',12),(4,'Hiking Adventure','Reached the summit and the view was breathtaking.',6),(5,'New Recipe Success','Tried a new dish and it turned out delicious.',17),(6,'Gaming Marathon','Completed a 12-hour gaming session!',7),(7,'Nature Photography','Captured some stunning shots of wildlife.',4),(8,'Book Review: Sci-Fi Favorite','A gripping storyline that kept me hooked.',9),(9,'Tech Gadgets Unboxing','Got my hands on the latest tech gadgets!',14),(10,'Artistic Creations','Finished a new painting today.',11),(11,'Travel Diaries: European Adventure','Visited multiple countries in Europe!',5),(12,'Healthy Lifestyle Journey','Started a new fitness routine today.',16),(13,'Movie Review: Blockbuster Hit','The plot twists had me on the edge of my seat!',10),(14,'Pet Adventures','Took my furry friend to the park.',19),(15,'Late Night Thoughts','Contemplating life and its mysteries.',13),(16,'DIY Project Success','Completed a home improvement project.',20),(17,'Music Festival Experience','Danced the night away with great music!',2),(18,'Cooking Masterclass','Learning new cooking techniques.',18),(19,'Coding Challenges','Solving complex problems with code.',1),(20,'Fashion Trends Update','Exploring the latest fashion trends.',15),(21,'Beach Sunset','Enjoyed a beautiful sunset at the beach.',3),(22,'Learning SQL Basics','Starting my journey into database management.',8),(23,'Music Concert Experience','Attended an amazing concert last night!',12),(24,'Into the Wilderness','Hiking through the woods and loving it.',6),(25,'Delicious Dinner Recipe','Tried a new recipe and it was a hit!',17),(26,'Gaming Highlights','Achieved a new high score in my favorite game!',7),(27,'Nature\'s Beauty','Capturing the serenity of nature through photos.',4),(28,'Bookworm Mode: Fantasy Series','Diving into a captivating fantasy series.',9),(29,'Tech Gadgets Review','Exploring the latest gadgets in tech world.',14),(30,'Expressive Artwork','Finished an emotional painting today.',11),(31,'European Adventures','Exploring Europe and its cultural diversity.',5),(32,'Fitness Journey','Pushing my limits at the gym!',16),(33,'Blockbuster Movie Review','Just watched the latest blockbuster movie!',10),(34,'Pet\'s Day Out','Spent a fun day with my furry companion.',19),(35,'Late Night Musings','Reflecting on life in the wee hours.',13),(36,'DIY Triumph','Successfully completed a DIY project.',20),(37,'Music Festival Memories','Memorable moments from a music festival.',2),(38,'Culinary Explorations','Experimenting with new culinary delights.',18),(39,'Coding Adventures','Exploring the world of coding challenges.',1),(40,'Fashion Forward','Embracing the ever-evolving fashion trends.',15),(41,'Sunny Day Adventure','Explored new trails and found hidden gems.',3),(42,'Programming Journey Begins','Embarking on the coding odyssey!',8),(43,'Concert Night Excitement','The atmosphere was electrifying!',12),(44,'Mountain Hiking Thrills','Reaching new heights one step at a time.',6),(45,'Culinary Experiment Success','Tried a daring recipe, loved the outcome!',17),(46,'Gamer\'s Achievements','Conquered levels that seemed impossible!',7),(47,'Nature\'s Canvas','Capturing the essence of the wilderness.',4),(48,'Book Review: Mystery Novel','A gripping mystery that kept me guessing.',9),(49,'Tech Gadgets Unleashed','Unboxing the latest tech wonders!',14),(50,'Artistic Creations Unveiled','Revealing a new artistic masterpiece.',11),(51,'European Tour Delights','Immersing in diverse European cultures.',5),(52,'Fitness Regimen Kickoff','Setting fitness goals and going for it!',16),(53,'Movie Review: Indie Gem','Discovered an underrated cinematic gem!',10),(54,'Pet Adventures Galore','Exploring the outdoors with my furry buddy.',19),(55,'Midnight Contemplations','Pondering on life\'s intricacies.',13),(56,'Home Improvement Triumph','DIY success in transforming spaces.',20),(57,'Music Festive Vibes','Danced away to the beats of euphoria!',2),(58,'Culinary Creativity Explored','Experimenting with exotic cuisines.',18),(59,'Coding Challenges Journey','Solving puzzles with lines of code.',1),(60,'Fashion Exploration','Revamping style with trendsetting looks.',15),(61,'Sunset Adventure','Rediscovered the beauty of sunsets.',3),(62,'Coding Journey Commences','Embarking on a coding adventure!',8),(63,'Concert Thrills','Lost in the magic of live music!',12),(64,'Peak Hiking Expedition','Conquered a challenging mountain trail!',6),(65,'Exquisite Culinary Experiment','Tried an adventurous recipe and nailed it!',17),(66,'Gamer\'s Triumphs','Leveling up in the gaming world!',7),(67,'Nature\'s Beauty Captured','Immersed in the tranquility of nature.',4),(68,'Mystery Book Review','A suspenseful mystery that kept me hooked.',9),(69,'Tech Gadgets Galore','Unboxed the latest tech gadgets!',14),(70,'Artistic Masterpiece Revealed','Unveiling a new creative creation.',11),(71,'European Expedition','Experiencing the cultural diversity of Europe.',5),(72,'Fitness Journey Initiated','Embarked on a fitness transformation!',16),(73,'Indie Movie Gem Review','Discovered an indie movie worth watching!',10),(74,'Pet Adventures Chronicles','Adventures with my furry companion.',19),(75,'Late Night Reflections','Contemplating the mysteries of life.',13),(76,'DIY Success Story','Successfully completed a DIY project.',20),(77,'Music Festival Memories','Vibrant memories from a music festival!',2),(78,'Culinary Explorations Continued','Exploring new culinary territories.',18),(79,'Coding Challenges Explored','Delving into coding challenges.',1),(80,'Fashion Forward Trends','Embracing the latest fashion trends.',15),(81,'Beachside Serenity','Relaxing moments by the shore.',3),(82,'Beginning the Coding Journey','Embarking on a programming quest!',8),(83,'Energizing Concert Night','Lost in the music and the crowd!',12),(84,'Summit Conquest','Reached the peak, the view was breathtaking!',6),(85,'Culinary Experiment Triumph','Nailed a complex recipe with perfection!',17),(86,'Gaming Conquests Unveiled','Achieved gaming milestones!',7),(87,'Nature\'s Wonders','Capturing nature’s magnificence.',4),(88,'Mystery Book Exploration','Engrossed in an enigmatic story.',9),(89,'Tech Gadgets Unveiled','Unboxing the latest tech wonders!',14),(90,'Artistic Unveiling','Revealing a new creative masterpiece.',11),(91,'European Sojourn','Immersing in the cultures of Europe.',5),(92,'Fitness Journey Kickoff','Initiating a transformative fitness journey!',16),(93,'Indie Movie Review','Discovered an indie gem in the film world!',10),(94,'Adventures with Pets','Exploring the outdoors with furry friends.',19),(95,'Midnight Musings','Reflecting on the mysteries of existence.',13),(96,'DIY Home Triumph','Successfully completed a home improvement project.',20),(97,'Melodic Festival Vibes','Dancing to the beats of a music festival!',2),(98,'Culinary Explorations Continuation','Continuing the journey of culinary discovery.',18),(99,'Coding Quests','Embarking on coding challenges.',1),(100,'Fashion Evolution','Embracing the evolving world of fashion.',15);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'adventure123','adventure123@example.com'),(2,'sunnygirl89','sunnygirl89@email.com'),(3,'codingwizard7','codingwizard7@domain.com'),(4,'musiclover22','musiclover22@example.org'),(5,'skywalker45','skywalker45@email.com'),(6,'bookworm88','bookworm88@domain.com'),(7,'gamerpro11','gamerpro11@example.org'),(8,'naturefan33','naturefan33@email.com'),(9,'artista27','artista27@domain.com'),(10,'techgeek76','techgeek76@example.org'),(11,'wanderlust55','wanderlust55@email.com'),(12,'foodiegal99','foodiegal99@domain.com'),(13,'fitnessfreak66','fitnessfreak66@example.org'),(14,'fashionista21','fashionista21@email.com'),(15,'sciencewhiz10','sciencewhiz10@domain.com'),(16,'moviebuff44','moviebuff44@example.org'),(17,'petlover73','petlover73@email.com'),(18,'nightowl12','nightowl12@domain.com'),(19,'beachbum25','beachbum25@example.org'),(20,'diyenthusiast17','diyenthusiast17@email.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-23 15:48:03
