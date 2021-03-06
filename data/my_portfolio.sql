-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2021 at 04:22 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `hashes`
--

CREATE TABLE `hashes` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `hash` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hashes`
--

INSERT INTO `hashes` (`id`, `id_user`, `hash`) VALUES
(1, 1, '3606620365fec6cfb6d3c13.78796514'),
(2, 1, '18406584325fec6d57b43df2.10857447'),
(3, 1, '8159489945fed399977e7d3.49239669'),
(4, 1, '6440097005fed39e7ae45b9.23894649'),
(5, 1, '19181778735fed3a3048b482.94370529'),
(6, 1, '18032025505fed3a634382b3.09841545'),
(7, 1, '3472787855fed3dc69ea5e0.21953375'),
(8, 1, '19511532195fed40fe8397e0.49982110'),
(9, 1, '15323348535fed462982f5a3.52932428'),
(10, 1, '7832238545fed5078390bb6.96338424'),
(11, 1, '10997944135fed51bd2add95.71847475'),
(12, 1, '11785044995fed53d2514834.68977176'),
(13, 1, '17340776355fed5458d21d77.73914821'),
(14, 1, '19834853395fed8678046142.98523209'),
(15, 1, '4223723115fed88d2a5cb95.66167903'),
(16, 1, '12569318705fed8bd3092b65.06670629'),
(17, 1, '19262969335fedb32ce6a235.86609203'),
(18, 1, '3394456055fedb5509e5088.03150172'),
(19, 1, '3088304815fedb652a8e9e2.24297965'),
(20, 1, '6410941575fee863280fd67.18149519'),
(21, 1, '18292383705fefe5ff1d69f5.14322083'),
(22, 1, '17780908765fefe62b983e26.33783530'),
(23, 1, '3368099095ff0241fe3f563.61268757'),
(24, 8, '10958223075ff0260668c142.06607248'),
(25, 8, '17705101075ff033266c8201.06309033'),
(26, 2, '5753761995ff08c7da3faf3.90374739'),
(27, 2, '5341460695ff08d0c7750b7.65785359'),
(28, 2, '13370919675ff08e12a57483.29104217'),
(29, 2, '18291640825ff08eb69a5e96.16406447'),
(30, 2, '4439971385ff09109191ed4.93061542'),
(31, 2, '18381979155ff091494595a8.67722569'),
(32, 2, '9857553505ff09176a7b740.93261407'),
(33, 2, '10928178965ff091de9d3538.53512449'),
(34, 2, '1957944275ff09239f3f138.62854504'),
(35, 2, '12968861365ff0924a92bbd8.33600785'),
(36, 2, '11575573155ff0927b596e61.22798412'),
(37, 2, '4864257435ff09bb2b87888.04527451'),
(38, 2, '12270383515ff09cae5fb9f7.20056561'),
(39, 2, '6701292995ff09d2f7a7ab6.00644844'),
(40, 2, '10767385915ff09d3a96ab67.78077122'),
(41, 2, '10273146415ff09d5d01d714.70706120'),
(42, 2, '5399355315ff09d8b10a781.42579377'),
(43, 2, '9184702625ff09e1bb43ab7.45730596'),
(44, 2, '12914908875ff09e541ed539.16780685'),
(45, 2, '11010357155ff10deb534715.01969454'),
(46, 2, '12745220785ff10e5f627aa0.76881701'),
(47, 2, '3841616375ff10ee1afe674.43306640'),
(48, 2, '18846851455ff10eec2fbdb6.72261510'),
(49, 2, '15094910805ff10f20a71d45.46201816'),
(50, 2, '14304400685ff10f6b1738a6.21063806'),
(51, 2, '5429170665ff10f865e1e85.72671897'),
(52, 2, '19438884265ff10f98232637.89426935'),
(53, 2, '14401191665ff10fac5e70d7.19642600'),
(54, 2, '3198744845ff10fc23412a6.65564678'),
(55, 2, '3254643005ff1102b8727b6.13760203'),
(56, 2, '16023154795ff11034f2a0b2.87997663'),
(57, 8, '13394591425ff114601a02a1.47541595'),
(58, 2, '413844385ff117b8aa6250.60704697'),
(59, 8, '4827693035ff117f51f5592.96402839'),
(60, 2, '14881434935ff128d2734b65.94107279'),
(61, 2, '16804952605ff15cfb6a37c6.61631972'),
(62, 2, '1656852015ff16d14ad1f73.56720712'),
(63, 2, '1156138415ff1be07f38e29.54333493'),
(64, 2, '7840105975ff1be1866c4d7.27695254'),
(65, 2, '1059506725ff1bf4f9a9f17.97423264'),
(66, 2, '2212095735ff1c20cc7b099.71800394'),
(67, 9, '6169019115ff1c4c18fa424.02968944'),
(68, 2, '6729024675ff1c67055b391.74549454'),
(69, 9, '14352220085ff1c9774c8698.01442586'),
(70, 10, '13294055015ff1c9f55f4761.27200016'),
(71, 10, '1993251355ff1ca17971e47.40973166'),
(72, 11, '16376406395ff1cacb0b50a2.94569063'),
(73, 2, '2872199035ff1cb344080d2.90208841'),
(74, 12, '2824592195ff1cbc71da287.89702833'),
(75, 12, '14077470015ff1cbe6c09686.59971576'),
(76, 2, '21185441085ff1ce02c6cf03.01613837'),
(77, 12, '20706867865ff1d097c5a3c3.14216711'),
(78, 12, '18830860415ff1d477b9b215.81928764'),
(79, 2, '2726430855ff1d4841ca5f0.74334621'),
(80, 11, '8628369115ff1d54e24c7a1.65828452'),
(81, 2, '17806861935ff1d79d323e08.11120782'),
(82, 2, '13826602945ff26af987d646.01588570'),
(83, 11, '15721801665ff26f09c1fa90.00682881'),
(84, 2, '18149329625ff27f7f249ca9.03333255'),
(85, 2, '10847531565ff2834ae2a3c7.87022942'),
(86, 2, '17911061965ff283e16ec6f0.10241167'),
(87, 2, '3878831595ff28b07be73b7.37153438'),
(88, 2, '5865544475ff295e6b07ba3.51778851'),
(89, 2, '5440159385ff2a5410916d8.95772217'),
(90, 2, '18626955205ff2a6d2bb0421.12083550'),
(91, 8, '5394031535ff2a859aefee1.52679824'),
(92, 2, '4988230645ff2aee4ad6054.46685531'),
(93, 2, '20350746725ff2afe44201b6.45905696'),
(94, 2, '7384432505ff2b9f4a21212.65293876'),
(95, 2, '19324357945ff2ba5b2f3f21.26271188'),
(96, 2, '9100925ff2cc56c8ed69.18888767'),
(97, 2, '17926955985ff2cc67626cb6.78415324'),
(98, 2, '15639303685ff2cc7217b438.28815735'),
(99, 2, '7507511445ff2ccc84c2976.09354091'),
(100, 2, '18684418875ff2cce4cdfc76.95887961'),
(101, 2, '537595615ff2cff90a0a95.45204502'),
(102, 2, '7300616595ff2d093d5ee37.45219080'),
(103, 13, '1011989095ff2d62f921768.89500455'),
(104, 13, '3219164305ff2d640839422.24172799'),
(105, 2, '8234225695ff2eb062872d1.00348852'),
(106, 14, '2441388225ff460be4b7d08.37161461'),
(107, 14, '6377251345ff460cc86f495.04517544'),
(108, 14, '13699184495ff462f5840050.50367057'),
(109, 14, '19237682485ff4630a3d27d0.15926088'),
(110, 14, '3403313005ff47d78c4d552.84138157'),
(111, 14, '11376400085ff47d80145267.98545762'),
(112, 14, '5202297865ff47d8cc43f51.24481315'),
(113, 14, '18478324945ff47f2db784b7.29363433'),
(114, 14, '6180573915ff4818a57b497.60873860'),
(115, 14, '19814986135ff481901e35c4.97538596'),
(116, 14, '19614543795ff48197ce72e4.99838529'),
(117, 13, '817145285ff4820986fb74.22698353'),
(118, 13, '6832300085ff5ef27d72068.74510388'),
(119, 13, '20100535225ff5ef45f15890.75281942'),
(120, 13, '18053133995ff7e7b56cda07.28314977'),
(121, 13, '13512674145ff7e8d8633523.57349174'),
(122, 13, '3448788075ff822881f7696.44931647'),
(123, 13, '15303075015ff82410b18bd3.88830070'),
(124, 13, '17360549145ff82448432e62.12739172'),
(125, 13, '9359548865ff82792d01c25.61866087'),
(126, 13, '1815027205ff8288e7fa8d8.31465089'),
(127, 13, '21083905655ff829ac13dbd9.99682667'),
(128, 13, '14146869575ff829dc88ca75.01660756'),
(129, 13, '12375419495ff82a1567a7d7.36467321'),
(130, 13, '15560905335ff82a1cd6ed21.33919685'),
(131, 13, '6143509525ff82a76502f63.03832550'),
(132, 13, '1389429145ff82ea5c4f811.75325455'),
(133, 13, '19994581325ff82edf1984e7.64309366'),
(134, 13, '17060446175ff82f2f672ee1.30245711'),
(135, 13, '2042405115ff82f3b3d3093.16166991'),
(136, 13, '17606960495ff82fedc28a56.36520500'),
(137, 13, '3905371335ff82fffe78720.02241996'),
(138, 13, '18949564925ff830477299b5.36838345'),
(139, 13, '13278116145ff831789dad20.99706169'),
(140, 13, '5151081585ff8318bf27e58.76835932'),
(141, 13, '7900742365ff832199003c1.89963943'),
(142, 13, '12355912345ff83c87cdd402.83550639'),
(143, 13, '4231132305ff83c9d26b063.78040460'),
(144, 13, '20315190605ff83cbf948a68.55136741'),
(145, 13, '8458227845ff83d80a5faf1.64346610'),
(146, 13, '18073801595ff83e41dfaad2.51059185'),
(147, 13, '2015018095ff83e4d7525a3.37844561'),
(148, 8, '15767978355ff8653cacddb2.94711603'),
(149, 8, '11930963575ff865577c6ea6.00949042'),
(150, 8, '3718492015ff8656a96d037.74636225'),
(151, 8, '8164141235ff865c6c85677.00841881'),
(152, 8, '16959204395ff8663d358922.58098465'),
(153, 8, '17438449095ff8665c9092b4.40858390'),
(154, 8, '10933302495ff866c742e861.92441311'),
(155, 8, '21443976705ff866f387ca21.77191356'),
(156, 2, '18334956646003027ea3adc8.82261997'),
(157, 2, '1130904536600303d03c8388.17524280'),
(158, 2, '1618908932600635e310c8d7.68739601'),
(159, 19, '1970185464600638143a8ae2.48878842'),
(160, 19, '37602536660063821b1c0d4.80825151'),
(161, 20, '13034808156006384ae2a967.62130903'),
(162, 13, '199598398260063918c547b4.07329773'),
(163, 14, '151140099600639c26c4b21.58036618'),
(164, 20, '76530561760063d093aad27.65852795'),
(165, 21, '120700343160063e67b9e418.50213802'),
(166, 8, '76193474460141f0200c541.56442493'),
(167, 8, '43265037860141fdfe7a373.18412739'),
(168, 8, '1424308809601423a0103004.39464713'),
(169, 8, '2357872366014245087f7e1.59950404'),
(170, 8, '124508105601424b479e580.82135045'),
(171, 8, '147291280260142613410186.20920632'),
(172, 8, '203971507060142c72abb470.17602079'),
(173, 8, '9868437036014339813d4c8.57147636'),
(174, 8, '5569551426014afb5e18b76.54088405'),
(175, 8, '19918146906014b0580e27f9.67144140'),
(176, 8, '18569847966014b06581b3a1.03749608'),
(177, 8, '2844808476014b2d9e38f72.48701139'),
(178, 8, '10873132006014b37425abe4.93199329'),
(179, 8, '15268107376014b9db192311.20811252'),
(180, 8, '7124460596020051f180a56.06146172'),
(181, 8, '1391355676602007a285c159.01205283'),
(182, 8, '150475103560201103b0ed00.81452289'),
(183, 8, '19173066716020a80885f518.31832460'),
(184, 8, '66714785602104409b38b2.99595605'),
(185, 8, '39606250260210452325cc9.95064897'),
(186, 8, '1068017877602104fa2712d9.08814591'),
(187, 8, '2604393536021069e9be955.20077048'),
(188, 8, '7308916026022276d081920.06877511'),
(189, 8, '338760980602229cf70af58.76725695'),
(190, 8, '186659113260222e164f2c04.45566123'),
(191, 8, '7222220866022360ae74c69.99555246'),
(192, 8, '502179159602356eb78e579.06408080'),
(193, 8, '329598180602517ec322e24.89321260'),
(194, 8, '2655991726025294b3d8d33.43078200'),
(195, 21, '1488025250602740ae0b9a77.61943269'),
(196, 21, '205549127602746f25368f3.90291052'),
(197, 21, '6914887576027c2084266f1.07429286'),
(198, 21, '2271861026027c2143ee9b1.12966000'),
(199, 21, '20340314866027c5dc05f580.14960896'),
(200, 21, '13005184476027c858f273e2.76526782'),
(201, 21, '15195190596027ca86b4e443.88178544'),
(202, 21, '21296026656027caae8ecc90.46047863'),
(203, 21, '14249550506027caec9aac22.81150496'),
(204, 21, '16494360496027cb11d22628.52520111'),
(205, 21, '3076555776027ce8e897375.57094762'),
(206, 21, '5387640456027d142558dc0.67992781'),
(207, 21, '7455286926027d16d6dc168.98303936'),
(208, 21, '11613469666027d19749bb72.08109258'),
(209, 21, '7261217396027d1f42c6a39.10662089'),
(210, 21, '92017300360294984044f04.04279739'),
(211, 21, '1139600788602949c2289369.04436970'),
(212, 21, '204284917602949eaa67262.94645499'),
(213, 21, '160335247860294a4701bf49.47011196'),
(214, 21, '147920170160294a9869b519.79292497'),
(215, 0, '91781572860294f0d3c6ab6.92117607'),
(216, 0, '66126754360294f8c26d860.33499981'),
(217, 0, '190680749260294ffb246e21.13726193'),
(218, 0, '20433314446029512793e797.27639034'),
(219, 0, '108907412360295209c9e554.66927834'),
(220, 0, '12703754526029525c4d29c8.75486903'),
(221, 0, '7051828336029538b469329.08843415'),
(222, 0, '2143640568602954087aaa70.48513790'),
(223, 0, '124084327560295516ca10e9.80233893'),
(224, 0, '20301949016029554e829ae5.46194808'),
(225, 0, '881244643602a9a00708386.86269848'),
(226, 0, '926078109602a9a4415a570.22481141'),
(227, 0, '1475637597602a9a9f8f5ef2.44455138'),
(228, 0, '374452331602a9b2cc6bbe3.03228462'),
(229, 23, '656481687602a9c5db54e50.68802794'),
(230, 23, '355829351602a9c94b06b72.29619955'),
(231, 23, '1577872315602a9cc505d656.53483760'),
(232, 23, '647613089602a9d88b49526.58363246'),
(233, 23, '148270157602a9dac8f1cd6.53452457'),
(234, 23, '795610668602a9f55a2bd77.80756810'),
(235, 23, '1356924001602a9fe1722af8.06441258'),
(236, 23, '1389538812602aa13394ed53.31205995'),
(237, 23, '1879522459602aa1570e7e93.30650996'),
(238, 23, '301065322602aa2635c9ea0.12989270'),
(239, 23, '2037749957602aa57e020eb5.89459187'),
(240, 24, '1353033305602aa5e44e89b9.11099191'),
(241, 8, '971304340602aaac5efaa16.98925071'),
(242, 24, '535955974602ab4cb0c32b4.31608440'),
(243, 24, '2119816615602b0ac91bbcd7.24952024'),
(244, 8, '1112248590602b0adb015306.33961650');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `name_and_ext` varchar(200) COLLATE utf8_bin NOT NULL,
  `number_of_views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `name_and_ext`, `number_of_views`) VALUES
(73, 'look.com.ua-114009', 'look.com.ua-114009.jpg', 2),
(74, 'look.com.ua-114013', 'look.com.ua-114013.jpg', 14),
(75, 'look.com.ua-114236', 'look.com.ua-114236.jpg', 1),
(76, 'look.com.ua-114358', 'look.com.ua-114358.jpg', 4),
(77, 'look.com.ua-114400', 'look.com.ua-114400.jpg', 14),
(78, 'look.com.ua-114402', 'look.com.ua-114402.jpg', 2),
(79, 'look.com.ua-114443', 'look.com.ua-114443.jpg', 1),
(80, 'look.com.ua-114445', 'look.com.ua-114445.jpg', 5),
(81, 'look.com.ua-114499', 'look.com.ua-114499.jpg', 1),
(82, 'look.com.ua-114504', 'look.com.ua-114504.jpg', 0),
(83, 'look.com.ua-114505', 'look.com.ua-114505.jpg', 0),
(84, 'look.com.ua-114553', 'look.com.ua-114553.jpg', 1),
(85, 'look.com.ua-114555', 'look.com.ua-114555.jpg', 11),
(86, 'look.com.ua-114566', 'look.com.ua-114566.jpg', 2),
(87, 'look.com.ua-114683', 'look.com.ua-114683.png', 14);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `user` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link_to_sosial_network` varchar(800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `review` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_small` varchar(800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user`, `link_to_sosial_network`, `review`, `img_small`, `admin`) VALUES
(74, 'Ember', 'https://vk.com/id118736477', ' Rere 1', 'https://sun1-86.userapi.com/impg/W80a51WFrvCyaQljxr2tZ_w0KJc__XNqEjby5w/sZD1889xFW0.jpg?size=100x0&quality=96&crop=53,53,427,427&sign=1907f867a8aaa807696231215763963b&c_uniq_tag=9kpdmsmL5dkL72vM5mQRy3UaZCQm4bGaXzuThXw5pEY&ava=1', 0),
(76, 'ÐœÐ¸Ñ…Ð°Ð¸Ð»', 'https://vk.com/id14406547', ' ÐžÑ‚Ð»Ð¸Ñ‡Ð½Ñ‹Ð¹ Ð½Ð°ÑÑ‚Ð°Ð²Ð½Ð¸Ðº Ð½Ð° ÐºÑƒÑ€ÑÐµ JavaScript - Ð¿Ñ€Ð¾Ð´Ð²Ð¸Ð½ÑƒÑ‚Ñ‹Ð¹ ÑƒÑ€Ð¾Ð²ÐµÐ½ÑŒ (GeekBrains). Ð¥Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¿Ð¾Ð¼Ð¾Ð³ Ñ€Ð°Ð·Ð¾Ð±Ñ€Ð°Ñ‚ÑŒÑÑ Ñ vue.js Ð¸ ÐµÐ³Ð¾ ÐºÐ¾Ð¼Ð¿Ð¾Ð½ÐµÐ½Ñ‚Ð°Ð¼Ð¸. Ð ÐµÐºÐ¾Ð¼ÐµÐ½Ð´ÑƒÑŽ, ÐºÐ°Ðº Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¼Ð¸ÑÑ‚Ð° Ñ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð½Ñ‹Ð¼ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÐµÐ¼ JS', 'https://sun1-19.userapi.com/impg/Da73J3wv9Yg8sJ00jpZGBiG2-pnSDAJkJe5z1g/xRvAFOEMknk.jpg?size=100x0&quality=96&crop=855,1,1705,1705&sign=791d59af31e6ee366dc028f30dfcc48d&c_uniq_tag=bKr8maDtlwQJzQ9GiuLDISVw7x1KCE7CJUDIouWKV40&ava=1', 0),
(77, '<&lenny^>', 'https://vk.com/id12094371', 'ÐžÑ‚Ð»Ð¸Ñ‡Ð½Ñ‹Ð¹ Ð½Ð°ÑÑ‚Ð°Ð²Ð½Ð¸Ðº Ð½Ð° ÐºÑƒÑ€ÑÐµ JavaScript - Ð¿Ñ€Ð¾Ð´Ð²Ð¸Ð½ÑƒÑ‚Ñ‹Ð¹ ÑƒÑ€Ð¾Ð²ÐµÐ½ÑŒ (GeekBrains). Ð›ÑƒÑ‡ÑˆÐ¸Ð¹ Ñ ÐºÐµÐ¼ Ñ Ð¾Ð±Ñ‰Ð°Ð»ÑÑ Ð·Ð° Ð²Ñ€ÐµÐ¼Ñ Ð¾Ð±ÑƒÑ‡ÐµÐ½Ð¸Ñ!!!', 'https://sun1-30.userapi.com/s/v1/if1/VpZuzlwv1S0YtF5vuPRhtcE2dC7z1tTfKAsNZ8PzbpL1lAqPAVRI12JDZrDE4BB602nRpdFU.jpg?size=100x0&quality=96&crop=66,3,1327,1327&ava=1', 0),
(78, 'Ð“ÑƒÐ»ÑŒÐ½Ð°Ð·', 'https://vk.com/id32553386', ' Ð—Ð°Ð¼ÐµÑ‡Ð°Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ Ð½Ð°ÑÑ‚Ð°Ð²Ð½Ð¸Ðº Ð¿Ñ€Ð¾Ð´Ð²Ð¸Ð½ÑƒÑ‚Ð¾Ð³Ð¾ js. Ð›ÑƒÑ‡ÑˆÐ¸Ð¹! ÐžÑ‡ÐµÐ½ÑŒ Ð³Ñ€Ð°Ð¼Ð¾Ñ‚Ð½Ð¾, Ð¿Ñ€Ð¾Ñ„ÐµÑÑÐ¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ð¾, Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð¾ Ñ€Ð°Ð·ÑŠÑÑÐ½Ð¸Ð» ÑÐ»Ð¾Ð¶Ð½ÐµÐ¹ÑˆÐ¸Ðµ Ñ‚ÐµÐ¼Ñ‹, Ð¿Ð¾Ð¼Ð¾Ð³ Ñ€Ð°Ð·Ð¾Ð±Ñ€Ð°Ñ‚ÑŒÑÑ Ñ Vue.js Ð¸ ÑÐ¿Ñ€Ð°Ð²Ð¸Ñ‚ÑŒÑÑ Ñ Ñ‚Ñ€ÑƒÐ´Ð½Ð¾ÑÑ‚ÑÐ¼Ð¸ Ð² webpack. ', 'https://sun1-20.userapi.com/s/v1/if1/Aa5ldMPtwS4zoLXWWFqGCKIZzlVGbLZFOCJtJ62HRmnb4JjTAPiCUeQuuIBko67EVWdNrBMc.jpg?size=100x0&quality=96&crop=656,661,716,716&ava=1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(22, 'html'),
(42, 'css'),
(43, 'scss'),
(44, 'js'),
(45, 'Vue.js'),
(46, 'React.js'),
(47, 'node.js'),
(49, 'php'),
(77, 'sql');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(200) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `img_small` varchar(600) COLLATE utf8_bin NOT NULL,
  `img_big` varchar(600) COLLATE utf8_bin NOT NULL,
  `sosial_network` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_in_sosial_network` bigint NOT NULL,
  `link_to_sosial_network` varchar(800) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `first_name`, `last_name`, `img_small`, `img_big`, `sosial_network`, `id_in_sosial_network`, `link_to_sosial_network`, `email`, `password`, `admin`) VALUES
(8, 'lotos', 'Alexander', 'Plotnikov', 'https://sun1-25.userapi.com/impg/UDYZmA3sed_oVjVeakMUeIyVnDYS_1dea9nDlw/xKcZ007YYJI.jpg?size=100x0&quality=96&crop=21,21,598,598&sign=9f904ff5cb4fda0aa00b898dff849491&c_uniq_tag=qR8gD6dwqomp1a9hjUJ7BrWTT6SYDhd53xM3VgNCk0I&ava=1', 'https://sun1-25.userapi.com/impg/UDYZmA3sed_oVjVeakMUeIyVnDYS_1dea9nDlw/xKcZ007YYJI.jpg?size=400x0&quality=96&crop=21,21,598,598&sign=2c46ad8d64911277cf9645740109cea3&c_uniq_tag=grwze31xC46FfvzlVogDLQ3RGb-SVR-mZBQoo8iSh6E&ava=1', 'site', 0, 'notLink', 'lotos_toi@mail.ru', '$2y$10$jJv4zl2Z2XPx01n86ABM.e4SiBs6uzH7fefZNCFrk9atFlpz26/Ne', 1),
(11, 'Марина', 'Марина', 'Чуносова', '/src/img/users/small/fb3435303603361672.jpg', '/src/img/users/big/fb3435303603361672.jpg', 'fb', 3435303603361672, 'https://facebook.com/3435303603361672', 'sibysi@mail.ru', '', 0),
(12, 'Александр', 'Александр', 'Плотников', 'https://graph.facebook.com/2768117680107010/picture?width=100', 'https://graph.facebook.com/2768117680107010/picture?width=300', 'fb', 2768117680107010, 'https://facebook.com/2768117680107010', 'lotos_toi@mail.ru', '', 0),
(24, 'Alexander', 'Alexander', 'Plotnikov', '/src/img/users/small/vk631958029.jpg', '/src/img/users/big/vk631958029.jpg', 'vk', 631958029, 'https://vk.com/id631958029', 'не указан', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8_bin NOT NULL,
  `img` varchar(100) COLLATE utf8_bin NOT NULL,
  `git` varchar(500) COLLATE utf8_bin NOT NULL,
  `project` varchar(500) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `img`, `git`, `project`, `description`) VALUES
(6, 'Адаптивная верстка', '602524f05b4bf.jpg', 'https://github.com/lotostoi/E-Shop.io', 'https://lotostoi.github.io/E-Shop.io/', 'Пример адаптивной верстки.\r\nПример адаптивной верстки интернет магазина. Слайдер написан на ванильном js. Для работы с scss использовался gulp.  '),
(7, 'Простая верстка статической страницы', 'Скриншот 26-12-2020 135735.png', ' https://github.com/lotostoi/html5-css3.io', 'https://lotostoi.github.io/html5-css3.io/', 'Простая верстка статической страницы.\r\nПример верстки статической страницы без адаптива.'),
(8, 'Интернет магазин на php', '602526e6024f2.jpg', 'https://github.com/lotostoi/startMVC', 'http://lotose.ru/', 'Простой интернет магазин на php.\r\nВ магазине реализован, поиск, простая авторизация, простая админка с возможностью добавлять и редактировать товары.  Админка доступна под логином admin 12345. Дизайн произвольный, верстка без адаптива. Код написан в OOП стиле. Фреймворки не используются.'),
(9, 'Пример адаптивной вертски интернет магазина', '1.png', 'https://github.com/lotostoi/index.io/tree/lesson4', 'https://lotostoi.github.io/index.io/', 'Пример адаптивной вёрстки интернет магазина.\r\nВерстка интернет магазина по макету. По ссылка показана верстка главной страницы, в репозитории можно посмотреть вёрстку других страниц. При верстке часть функционала была реализована с помощью js, vue.js(простой слайдер), ползунок для фильтрации цен на странице product.html,  реализован на основе плагина https://refreshless.com/nouislider/. ');

-- --------------------------------------------------------

--
-- Table structure for table `works_to_tags`
--

CREATE TABLE `works_to_tags` (
  `id` int NOT NULL,
  `id_work` int NOT NULL,
  `id_tag` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `works_to_tags`
--

INSERT INTO `works_to_tags` (`id`, `id_work`, `id_tag`) VALUES
(322, 0, 22),
(323, 0, 42),
(324, 0, 43),
(325, 0, 42),
(326, 0, 43),
(327, 0, 42),
(328, 0, 43),
(329, 0, 42),
(330, 0, 43),
(331, 0, 42),
(332, 0, 43),
(333, 0, 42),
(334, 0, 43),
(335, 0, 42),
(336, 0, 43),
(337, 0, 42),
(338, 0, 43),
(339, 0, 42),
(340, 0, 43),
(341, 0, 42),
(342, 0, 43),
(343, 0, 42),
(344, 0, 43),
(345, 0, 42),
(346, 0, 43),
(361, 0, 43),
(362, 0, 44),
(363, 0, 45),
(364, 0, 46),
(365, 0, 43),
(366, 0, 44),
(367, 0, 45),
(429, 7, 22),
(430, 7, 42),
(431, 9, 22),
(432, 9, 42),
(433, 9, 43),
(434, 9, 44),
(435, 6, 22),
(436, 6, 42),
(437, 6, 43),
(438, 6, 44),
(439, 6, 45),
(445, 8, 22),
(446, 8, 42),
(447, 8, 43),
(448, 8, 44),
(449, 8, 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hashes`
--
ALTER TABLE `hashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works_to_tags`
--
ALTER TABLE `works_to_tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hashes`
--
ALTER TABLE `hashes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `works_to_tags`
--
ALTER TABLE `works_to_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
