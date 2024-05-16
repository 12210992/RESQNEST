-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 23, 2024 at 03:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ass8`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `content`, `date`, `image`) VALUES
(1, 'How to Keep your Rabbits Cool in Summer', 'Blackberry', 'The summer has arrived and while many of us are enjoying the wonderful hot weather of the season, our pets may not be enjoying it quite so much.\r\n\r\nGive your Rabbit Plenty of Shade Keep your rabbit hutch out of direct sunlight as much as possible. Metal hutches in particular can warm up very quickly and will retain the heat throughout the day. Placing your hutch in a shaded area of your garden is ideal, preferably under a tree or large bush in order to allow some light to shine through, whilst protecting your rabbits from intense heat. If you are unable to move your hutch, then try placing a large sun umbrella close by. This will help to break up the intensity of the sunlight. The same applies to your rabbit run, as they are mostly made of wire mesh and are completely exposed to the sun\'s harmful rays. A lightweight cover that allows the wind to circulate and keep it ventilated, but also offers shelter from the sun, will ensure they can enjoy their exercise time without overheating. Try placing some ceramic or slate tiles inside the rabbit hutch. They are a cold material and your rabbits will like the cooling feeling against their body as they lie on top. A tunnel or hideaway is also a great idea for inside the hutch, perfect for an extra layer of shade. Offer your Rabbit Fresh, Cool Water A fresh supply of water is always essential and this should be replenished at regular intervals throughout the day during the summer months. A combination of water bowls and bottles will give your rabbit access to plenty of liquids and you may find that they even enjoy lying in the bowls when the weather is extremely hot. Adding ice-cubes to the water bowl will offer some cooling relief, as will offering a supply of fresh vegetables. These naturally contain a large amount of water and your rabbit will enjoy munching on them during those long hot days, whilst being kept hydrated at the same time. Keep Flies at Bay Flies are perhaps the most annoying thing about summer! They are the most persistent of creatures that can drive us to distraction and unfortunately, they have the same effect on our rabbits. Flies can cause serious harm if they lay eggs on your rabbit, so keeping them away from your rabbit hutch is vital. Scrupulous hygiene is essential and only regular cleaning of your pets bedding and litter will help keep these critters away. If you see flies around your rabbit hutch consider hanging some flypaper nearby (out of your rabbits reach) and check your pet regularly for any signs of infestation. Keeping your rabbit groomed and removing excess hair will not only help to keep them cooler in the heat, but it will also give flies less places to lay their eggs. How to Spot Heat Stroke Symptoms in Rabbits Heatstroke in rabbits can be fatal, as for other small animals. If you can spot the symptoms of heat stoke in the early stages, then you will have time to reverse the effects. The main symptoms to look out for are; Fast, shallow breathing Wetness around the nose Breathing rapidly from an open mouth whilst throwing their head back Hot ears If you are worried that your rabbit has heat stroke, take them indoors and into a cool, well ventilated room immediately. Do not submerge them in cold water as this can send them into shock, but do apply a cool compress to their ears. Offer them plenty of cool, fresh water and keep them calm. If they do not appear to be getting better within a short space of time, take them your local vet straight away. Keep your rabbit cool and fresh this summer and avoid them becoming a hot cross bunny!', '2024-04-03 00:00:00', 'data:image/jpeg;base64,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'),
(2, ' How to tell if your dog is at a healthy weight', 'history_birdie', 'For dogs to lead an active, healthy life it is important for them to maintain a healthy body weight, and as a dog owner, it is your responsibility to ensure that they do so. The most important factors to consider when it comes to your pet\'s weight are the intensity\r\n\r\nProfile Analysis As a rule, a dog\'s abdomen should be higher up than its ribcage, so that from their front legs their underside gradually inclines up toward their rear. A steep incline suggests that your pet is underweight, whereas a shallow incline or no incline at all indicates that your dog is overweight. The best way to check your dog\'s profile is to lower yourself so that you are level with your dog and view it from the side. Rib Examination Another way that you can easily tell if your dog is overweight is by placing both your thumbs on your dog\'s spine and opening your hands over its ribcage. If your pet is at a healthy weight then you ought to be able to feel their ribs under their coat and skin, but if there is too much fat then you will not be able to. Make sure that you look with your hands and not just your eyes, as a dog\'s coat can easily obfuscate its ribcage. Overhead Inspection With a healthy body weight, a dog will have a shape similar to that of an hourglass figure, and you ought to be able to see it by standing just in front of its face and looking down. Ideally, you will be able to see its waist tucked behind the ribs. If you can see the outline of your dog\'s individual ribs and the waist is noticeably more narrow than its ribcage, then your pet is underweight; however, if the waist is in line with the ribs or bulges out past them then it is overweight. You should adjust your dog\'s lifestyle accordingly depending on whether you find that it is overweight or underweight. If your pet is underweight then it is possible that you\'re over-exercising it and giving it food that is too low in calories. A specially developed working dog food would be ideal in this instance, as it is designed to provide dogs with an ample supply of energy and also contain an assortment of vitamins and minerals that will allow them to get back to a healthy weight whilst also improving their physical output. If, on the other hand, your dog is overweight, you should proceed by increasing its daily exercise regime and changing its diet to one that mainly consists of light dog food. Considering that in 2014 vets reported that almost a half of dogs in the UK are overweight, now is the time for dog owners to actively tackle canine obesity. If you find that your dog tends to get tummy upsets from certain foods, try them with grain-free dog food, which will aid digestion and help to reduce bloating. Browse our current range of delicious dog food for all breeds and sizes today.', '2024-04-09 22:06:01', 'data:image/jpeg;base64,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'),
(7, 'Cat Hygiene Checklist', 'Alex Johnson', 'There\'s nothing greater than pampering your pet and making them look like a star. Most cats have real pride in their appearance. Cats usually like to remain clean. Grooming your\r\n\r\nRegular grooming also helps in checking their body conditions and spotting any unusual signs of health problems. A clean cat is a happy cat and we are here to help you with that! Keep on reading and we will make grooming as enjoyable as possible for both of you. 1) Skin and fur care Different cats have different grooming needs. Don\'t forcefully make your cat do anything. Cats don\'t like to be pressured. Create a calm and quiet environment before you start with the main process. Once you find your cat relaxing, go with a few pets and cuddles first, then move on with the brushing. Tip: Don\'t use a comb with plastic bristles. It generates an electric charge which might shock your cat. 2) Pawdicures Wondering how to trim cat claws? Well, you don\'t need to panic. Keep your calm and start by petting your cat gently. Tools like a scratching post, nail clippers, and nail file will help you with Pawdicure. Tip: If your cat is not in the mood to get her nails clipped, you can get her a good scratcher which will keep her nails trimmed. 3) Cat Bath The cat\'s tongue makes it very easy for cats to bathe themselves, but occasionally they might require a little assistance from their hooman. A bath could be a good option if they have made a mess of themselves or have touched anything that could potentially be hazardous to them. Helpful tools for a good bath can be Cat shampoo and a bathmat. Tip: First, use a cup to wet your cat with warm water, and make sure to avoid their ears, eyes, and face. 4) Dental care Like humans, cats need clean and healthy gums and for that, you need to brush your feline\'s teeth. A quick brush of teeth can help your cat avoid dental problems and bad breath. You can either use a cat toothbrush or a cotton bud to rub your feline\'s teeth. Tip: Chew toys are also great at keeping your cattos teeth strong, massaging gums, and flossing! 5) Cleaning ears In cats, ear cleaning is typically not required. Although the majority of cats do just fine without it, ear cleaning can be a crucial aspect of your cat\'s hygiene needs if they are prone to ear infections or wax buildup. The easiest way to clean your cat\'s ears is by using ear cleaning solutions. Squeeze some ear cleaning solution into your cat’s ear. You can also use cat ear cleaning wipes to clean your feline’s ears. Tip: Always treat your cat once you are done with the ear cleaning process. This will make her feel pampered and happy. Your cat will thank you later for taking good care of her. Be patient and calm while grooming your cat. You just need good grooming products and use them consistently on your pet cat. It takes a lot of treats, love, and patience while grooming your cat. Happy cat caring!\r\n\r\n', '2024-04-09 22:25:45', 'data:image/jpeg;base64,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');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
