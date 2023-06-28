-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2023 at 11:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogScott`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `tag` varchar(20) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author`, `tag`, `date_created`) VALUES
(1, 'Egg Gravy Is A Southern Family Secret', 'Egg gravy made me a breakfast person. With roots in the Deep South, the dish is humble comfort food made to pair with sweet hot coffee and the sun\'s first rays of light.\r\n\r\nButter, flour, and milk are whipped into a white gravy that’s seasoned with salt and pepper, garlic powder, and Tony Chachere\'s Creole seasoning if you share my tastes. The eggs are hard-boiled, sliced, and dropped in the gravy. The challenge lies in reaching an ideal consistency of not too thin or thick, but just smooth enough to pour over biscuits or toast, roughly torn into bite-sized pieces. Top with hot sauce: Tabasco is my first choice, New Orleans\' Crystal as a back-up.\r\n\r\nA silly question to ask is, what are the precise measurements? Recipes passed down in the bayous of Louisiana and sticks of Mississippi leave that up to intuition, so you can only hope your ancestors are guiding your hands.\r\n\r\nThing is, tourists won\'t find egg gravy on restaurant menus. Even most New Orleans locals would be quick to furrow their brows and rack their brains and make a mental correction: \"Do you mean sausage gravy?\"\r\n\r\nNot in my family. Egg gravy was a mainstay in our house. Once made out of necessity for a generation in poverty, it\'s now a dish we eat just because we like it.\r\n\r\nI associate breakfast with rituals—a meal forever linked to family and that finite window of time we spent under the same roof. My sister and her sweet tooth remind me of chocolate chip pancakes and mini blueberry muffins. On the rare occasions that my dad took the helm in the kitchen, he\'d churn out potato latkes or cinnamon toast. My mom\'s preferred mimosa ratio is locked in my mind from playing the role of household bartender: a 50/50 split of no-pulp orange juice and prosecco.\r\n\r\nOur three-bedroom house was tucked in a suburban cul-de-sac where neighbors hosted block parties, kids set up lemonade stands, and the ice cream truck delivered sticky popsicles to eager hands every summer. Oak trees with Spanish moss cushioning their boughs lined the winding road to my neighborhood, a tight-knit community in a lakeside city across an estuary from our loud and proud New Orleans.\r\n\r\nIn the early mornings before heading to school, my sleepy sister and I slid into our seats at the kitchen counter while Mom puttered between the fridge and pantry. The usual spread: cereal or oatmeal, buttered toast, sugared strawberries, and a few vitamins. But weekends unlocked a world of possibilities, and nothing roused me out of bed faster than confirmation that egg gravy awaited on the table.\r\n\r\nAs years passed, egg gravy gradually transformed into an occasional treat. The Boyanton daughters grew up and moved away—one\'s now in the mountains of Colorado and the other on Florida’s beaches, with our parents in between in the Magnolia State. But every holiday season, we flock back to each other. And when I dig into my plate of egg gravy, that first bite still tastes like reverence.\r\n\r\nWhen Dad gets a forkful, it\'s a different sentiment: nostalgia. It was a low-cost breakfast that his father cooked on Sundays to feed nine or so mouths. My grandfather likely learned the recipe from his mother as a way to stretch a paycheck and survive economic hardships during the Depression.\r\n\r\nEgg gravy is a recipe of reincarnations. It once filled a physical void, then remedied the emotional ache of separation. And it likely hasn’t served its last purpose. I once labored over bright orange pans on my gas stove in college, trying to assuage homesickness with amateur attempts at the dish. Today, I broke out the ingredients and lovingly made it for my family. Maybe, one day, I’ll pass it down to children of my own, and egg gravy will be whatever they need it to be, too.', 'Rordon Gamsey', 'food', '2022-12-06 11:52:42'),
(2, 'Nike officially terminates partnership with Kyrie Irving', 'After initially suspending its partnership with Kyrie Irving and scrapping the release of his upcoming Kyrie 8 signature shoe last month, Nike confirmed Monday that it has fully cut ties with the Brooklyn Nets point guard.\r\n\r\n\"Kyrie is no longer a Nike athlete,\" a Nike company spokesperson told ESPN.\r\n\r\nIrving\'s agent, Shetellia Riley Irving, called the decision mutual.\r\n\r\n\"We have mutually decided to part ways and wish Nike the best in their future endeavors,\" she told CNBC on Monday.\r\n\r\nIrving\'s signature endorsement agreement with the company was set to expire on Oct. 1, 2023. The deal was abruptly suspended 11 months before expiring after Irving posted a link on social media to a book and movie containing antisemitic messaging.\r\n\r\n\"Kyrie stepped over the line. It\'s kind of that simple,\" Nike co-founder Phil Knight told CNBC on Nov. 10. \"He made some statements that we just can\'t abide by, and that\'s why we ended the relationship. I was fine with that.\"\r\n\r\nKnight\'s comments three weeks ago were understood throughout the industry as confirmation that the partnership was indeed fully terminated ahead of its expiration.\r\n\r\nAround 68% of the NBA wears Nike sneakers in games. In each season since the launch of the Kyrie 1, the annual Kyrie model had become one of the most worn shoes across the league. To date, 164 players had worn the Kyrie 7 in games, according to data from KixStats.com. Dozens of players often wear the lower-priced Kyrie Low model as well, with others also rotating between past years\' models.\r\n\r\nThe brand is not expected to instruct or request that current NBA players stop wearing Kyrie-branded shoes, sources told ESPN, given that it is midseason and players have long preferred the comfort and performance of the Irving series on court.\r\n\r\nThe clarity of the contract\'s termination coming now, well before its scheduled 2023 expiration, means Irving is now a sneaker free agent and could sign a new endorsement deal with the brand partner of his choosing.\r\n\r\nAfter signing with Nike as a rookie in 2011, Irving became just the 20th NBA player in league history to receive his own signature sneaker with the company in 2014.\r\n\r\nIrving\'s annual signature Kyrie shoe line and lower-priced Kyrie Low and Kyrie Flytrap models led to one of the industry\'s best-selling total signature footwear businesses. It was Nike\'s second-most lucrative current player franchise in recent years, only behind LeBron James\' signature series.\r\n\r\n\"Anyone who has [ever] spent their hard-earned money on anything I have ever released, I consider you FAMILY and we are forever connected,\" Irving tweeted on Monday. \"It\'s time to show how powerful we are as a community.\"', 'JeBron Lames', 'basketball', '2022-12-06 11:55:01'),
(3, 'God of War Ragnarök leads The Game Awards 2022 nominations', 'God of War Ragnarök is nominated for 10 prizes, ahead of Elden Ring and Horizon: Forbidden West, both of which are up for seven awards.\n\nThe Game of the Year nominees are A Plague Tale: Requiem, Elden Ring, God of War Ragnarök, Horizon: Forbidden West, Stray, and Xenoblade Chronicles 3.\n\nThere are 31 awards up for grabs in total (see the full list of nominees below), with the winners set to be determined by a blended vote between the voting jury (90%), which includes VGC, and public fan voting (10%).\n\nThis year’s event will introduce the Best Adaptation award, a category to recognise creative work that authentically adapts video game IP to other media. The nominees are Arcane: League of Legends, Cyberpunk Edgerunners, The Cuphead Show, Sonic the Hedgehog 2 and Uncharted.\n\nFeaturing world premieres, musical performances and special guests, The Game Awards will be streamed live from the Microsoft Theater in Los Angeles on Thursday, December 8.\n\nIt Takes Two won the top prize at The Game Awards 2021, where it scooped three awards including the coveted Game of the Year.\n\nOther headlines from the show included the reveals of Alan Wake 2, Sonic Frontiers, Star Wars Eclipse, Wonder Woman and Slitterhead.\n\nThe Game Awards enjoyed record viewership figures last year, according to its organisers.', 'Cray Tos', 'video games', '2022-12-06 11:58:56'),
(4, 'The Enigmatic Charm of Cats: Unraveling the Mystique of Our Feline Companions', 'Cats have long captivated our hearts with their enigmatic charm and undeniable allure. From their graceful movements to their mesmerizing eyes, these enigmatic creatures have left an indelible mark on human society. With a history spanning thousands of years, cats have been revered, cherished, and sometimes feared. In this article, we will dive into the fascinating world of cats, exploring their mysterious nature, their unique behaviors, and the unbreakable bond they share with us.\n\nThe Ancient Origins and Mystical Aura\nCats have held a place of reverence since ancient times, starting with the ancient Egyptians, who worshipped them as sacred beings. Believed to possess mystical qualities, cats were often depicted in Egyptian art and mythology. Their keen sense of hearing and sight, along with their nocturnal behavior, further added to their enigmatic aura. Today, their mysterious nature continues to fascinate us, leaving us wondering what secrets lie within those slanted eyes and elegant whiskers.\n\nThe Feline Persona: Independent Yet Affectionate\nCats are renowned for their independent nature, which adds to their allure. Unlike dogs, cats don\'t rely heavily on human companionship. They maintain their individuality and prefer to wander off on their own adventures. However, this doesn\'t mean they are devoid of affection. Cats have a unique way of forming deep bonds with their human counterparts. Their gentle purring, head bumps, and gentle kneading are all signs of their affectionate nature, creating a special connection that cat owners cherish.\n\nThe Mysterious Language of Cats\nOne of the most intriguing aspects of cats is their mysterious communication style. From flicking their tails to subtly twitching their ears, cats have an entire repertoire of body language. They use these cues to express their emotions, needs, and boundaries. A flicking tail might signify annoyance, while an upright tail with a slight curve shows contentment. Learning to interpret these subtle signals allows us to better understand and communicate with our feline friends, deepening our bond with them.\n\nThe Playful and Inquisitive Nature\nCats are natural-born hunters, and this instinct is evident in their playful behavior. They pounce, chase, and stalk their toys or even imaginary prey. Their agile movements and lightning-fast reflexes are a testament to their predatory prowess. This playful nature not only entertains us but also provides physical and mental stimulation for our feline companions. It\'s important for cat owners to provide enriching environments with interactive toys, scratching posts, and spaces to climb, allowing their curious minds to thrive.\n\nCats as Symbols of Mystery and Good Fortune\nThroughout history, cats have been associated with symbols of mystery and good fortune in various cultures. In Japanese folklore, the beckoning cat, or Maneki-neko, is believed to bring luck and prosperity to its owner. In Norse mythology, the goddess Freyja was accompanied by two large cats, symbolizing fertility and protection. The iconic black cat, often associated with witches and Halloween, is considered both an omen of bad luck and a symbol of good fortune in different traditions. These beliefs further highlight the enduring allure and fascination that cats hold in our collective consciousness.\n\nCats continue to captivate us with their mysterious ways, from their ancient origins to their playful demeanor and uncanny communication skills. Their independence, combined with their affectionate nature, creates a unique dynamic that cat owners find irresistible. Whether they are seen as mystical beings or symbols of good fortune, cats remain an integral part of human culture, forever enigmatic and forever beloved. So, the next time', 'Dusty', 'Cat', '2022-12-07 17:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `author`, `comment`, `date_created`) VALUES
(1, 3, 'Scott', 'Best game ever!', '2022-12-06 16:11:29'),
(2, 3, 'Minsoo', 'I so wish I had a PS5 so I could play it!', '2022-12-06 16:11:52'),
(3, 3, 'Shay', 'Meh. I think Elden Ring is much better!', '2022-12-06 16:12:20'),
(4, 3, 'Scott', 'This', '2022-12-06 16:39:00'),
(5, 3, 'Scott', 'Is', '2022-12-06 16:39:05'),
(6, 3, 'Scott', 'Pagination!', '2022-12-06 16:39:11'),
(7, 2, 'Scott', 'Good. Kick that dude out. He\'s such a bad influence', '2022-12-07 11:40:55'),
(8, 2, 'Ganbayar', 'Why would he say such things? He has all that money, but no brains.', '2022-12-07 11:41:30'),
(9, 2, 'Michael', 'These young guys got no respect', '2022-12-07 11:41:59'),
(10, 2, 'Dennis Rodman', 'Hey can ya\'ll send me back to North Korea? I want to party it up with my friend Kim Jong Un!', '2022-12-07 11:42:36'),
(11, 2, 'Scott', 'Dude\'s gonna lose so much money from this.', '2022-12-07 11:43:31'),
(12, 2, 'Minsoo', 'I love Dusty', '2022-12-07 11:43:42'),
(13, 1, 'Scott', 'That', '2022-12-07 11:44:04'),
(14, 1, 'Scott', 'food', '2022-12-07 11:44:10'),
(15, 1, 'Scott', 'looks', '2022-12-07 11:44:13'),
(16, 1, 'Scott', 'so', '2022-12-07 11:44:17'),
(17, 1, 'Scott', 'good!', '2022-12-07 11:44:21'),
(18, 1, 'Scott', 'It\'s', '2022-12-07 11:44:25'),
(19, 1, 'Scott', 'making', '2022-12-07 11:44:30'),
(20, 1, 'Scott', 'me', '2022-12-07 11:44:33'),
(21, 1, 'Scott', 'really', '2022-12-07 11:44:37'),
(22, 1, 'Scott', 'hungry', '2022-12-07 11:44:41'),
(23, 1, 'Scott', 'just', '2022-12-07 11:44:44'),
(24, 1, 'Scott', 'looking', '2022-12-07 11:44:47'),
(25, 1, 'Scott', 'st', '2022-12-07 11:44:51'),
(26, 1, 'Scott', '*at', '2022-12-07 11:44:56'),
(27, 1, 'Scott', 'it', '2022-12-07 11:44:59'),
(28, 1, 'Scott', '.', '2022-12-07 11:45:03'),
(29, 1, 'Scott', 'I', '2022-12-07 11:45:06'),
(30, 1, 'Scott', 'want', '2022-12-07 11:45:10'),
(31, 1, 'Scott', 'to', '2022-12-07 11:45:13'),
(32, 1, 'Scott', 'eat', '2022-12-07 11:45:16'),
(33, 1, 'Scott', 'it', '2022-12-07 11:45:19'),
(34, 1, 'Scott', 'right', '2022-12-07 11:45:23'),
(35, 1, 'Scott', 'now', '2022-12-07 11:45:27'),
(36, 1, 'Scott', '!', '2022-12-07 11:45:30'),
(37, 4, 'Dusty', 'I\'m the coolest cat in the werld!', '2022-12-09 13:36:00'),
(38, 4, 'Scott', 'hey guys', '2022-12-09 13:36:28'),
(39, 4, 'Scott', ' sup guys?', '2022-12-09 13:37:19'),
(40, 4, 'Shay', 'oh it works!', '2022-12-09 13:37:55'),
(41, 4, 'Ganbayar', 'This is cool!', '2022-12-09 15:19:40'),
(42, 4, 'Scott', 'Get well Dusty!', '2022-12-12 10:39:40'),
(43, 1, 'new comment', 'this is my new comment', '2023-03-07 12:08:16'),
(44, 1, 'another', 'this is another new comment', '2023-03-07 12:08:23'),
(45, 1, 'NEW!!', 'New comment!', '2023-03-08 15:55:35'),
(46, 1, 'scott', 'sup guys?', '2023-03-08 16:38:36'),
(47, 4, 'James', 'can you scroll to the right a little?', '2023-03-13 15:46:58'),
(48, 4, 'Hello', 'World', '2023-03-14 10:42:57'),
(49, 1, 'Batman', 'I am batman!', '2023-06-06 09:58:56'),
(50, 1, 'Lindsey', 'Hello', '2023-06-06 13:37:26'),
(51, 1, 'Graham', 'Is there a way to add comments? Or are those hard-coded?', '2023-06-06 15:05:39'),
(52, 1, 'Bananaman', 'This is my comment', '2023-06-07 10:36:27'),
(53, 1, 'Bananaman', 'This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my commentThis is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my commentThis is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment This is my comment', '2023-06-07 10:36:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
