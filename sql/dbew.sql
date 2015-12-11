-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2015 às 02:35
-- Versão do servidor: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbew`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat`
--

CREATE TABLE IF NOT EXISTS `arrowchat` (
  `id` int(10) unsigned NOT NULL,
  `from` varchar(25) NOT NULL,
  `to` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `sent` int(10) unsigned NOT NULL,
  `read` int(10) unsigned NOT NULL,
  `user_read` tinyint(1) NOT NULL DEFAULT '0',
  `direction` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_admin`
--

CREATE TABLE IF NOT EXISTS `arrowchat_admin` (
  `id` int(3) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arrowchat_admin`
--

INSERT INTO `arrowchat_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'eduardopetreca@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_applications`
--

CREATE TABLE IF NOT EXISTS `arrowchat_applications` (
  `id` int(3) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `folder` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `icon` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `width` int(4) unsigned NOT NULL,
  `height` int(4) unsigned NOT NULL,
  `bar_width` int(3) unsigned DEFAULT NULL,
  `bar_name` varchar(100) DEFAULT NULL,
  `dont_reload` tinyint(1) unsigned DEFAULT '0',
  `default_bookmark` tinyint(1) unsigned DEFAULT '1',
  `show_to_guests` tinyint(1) unsigned DEFAULT '1',
  `link` varchar(255) DEFAULT NULL,
  `update_link` varchar(255) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_banlist`
--

CREATE TABLE IF NOT EXISTS `arrowchat_banlist` (
  `ban_id` int(10) unsigned NOT NULL,
  `ban_userid` varchar(25) DEFAULT NULL,
  `ban_ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_chatroom_banlist`
--

CREATE TABLE IF NOT EXISTS `arrowchat_chatroom_banlist` (
  `user_id` varchar(25) COLLATE utf8_bin NOT NULL,
  `chatroom_id` int(10) unsigned NOT NULL,
  `ban_length` int(10) unsigned NOT NULL,
  `ban_time` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_chatroom_messages`
--

CREATE TABLE IF NOT EXISTS `arrowchat_chatroom_messages` (
  `id` int(10) unsigned NOT NULL,
  `chatroom_id` int(10) unsigned NOT NULL,
  `user_id` varchar(25) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `global_message` tinyint(1) unsigned DEFAULT '0',
  `sent` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_chatroom_rooms`
--

CREATE TABLE IF NOT EXISTS `arrowchat_chatroom_rooms` (
  `id` int(10) unsigned NOT NULL,
  `author_id` varchar(25) COLLATE utf8_bin NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `password` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `length` int(10) unsigned NOT NULL,
  `session_time` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_chatroom_users`
--

CREATE TABLE IF NOT EXISTS `arrowchat_chatroom_users` (
  `user_id` varchar(25) COLLATE utf8_bin NOT NULL,
  `chatroom_id` int(10) unsigned NOT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_mod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `block_chats` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `session_time` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_config`
--

CREATE TABLE IF NOT EXISTS `arrowchat_config` (
  `config_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `config_value` text,
  `is_dynamic` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arrowchat_config`
--

INSERT INTO `arrowchat_config` (`config_name`, `config_value`, `is_dynamic`) VALUES
('admin_chat_all', '0', 0),
('admin_view_maintenance', '0', 0),
('announcement', '', 0),
('applications_guests', '1', 0),
('applications_on', '0', 0),
('auto_popup_chatbox', '1', 0),
('bar_fixed', '0', 0),
('bar_fixed_alignment', 'center', 0),
('bar_fixed_width', '900', 0),
('bar_padding', '15', 0),
('base_url', '/webeasywork/arrowchat/', 0),
('buddy_list_heart_beat', '60', 0),
('chat_maintenance', '0', 0),
('chatroom_auto_join', '0', 0),
('chatroom_history_length', '60', 0),
('chatrooms_on', '0', 0),
('disable_arrowchat', '0', 0),
('disable_avatars', '0', 0),
('disable_buddy_list', '1', 0),
('disable_smilies', '0', 0),
('enable_chat_animations', '1', 0),
('enable_mobile', '1', 0),
('file_transfer_on', '0', 0),
('guest_name_bad_words', 'fuck,cunt,nigger,shit,admin,administrator,mod,moderator,support', 0),
('guest_name_change', '1', 0),
('guest_name_duplicates', '0', 0),
('guests_can_chat', '1', 0),
('guests_can_view', '1', 0),
('guests_chat_with', '1', 0),
('heart_beat', '3', 0),
('hide_admins_buddylist', '0', 0),
('hide_applications_menu', '0', 0),
('hide_bar_on', '1', 0),
('idle_time', '3', 0),
('install_time', '1449806715', 0),
('language', 'en', 0),
('notifications_on', '0', 0),
('online_timeout', '120', 0),
('popout_chat_on', '1', 0),
('push_on', '0', 0),
('push_publish', '', 0),
('push_subscribe', '', 0),
('search_number', '10', 0),
('show_bar_links_right', '0', 0),
('show_full_username', '0', 0),
('theme', 'new_facebook_full', 0),
('theme_change_on', '0', 0),
('us_time', '1', 0),
('user_chatrooms', '0', 0),
('user_chatrooms_flood', '10', 0),
('user_chatrooms_length', '30', 0),
('users_chat_with', '3', 0),
('video_chat', '1', 0),
('width_applications', '16', 0),
('width_buddy_list', '189', 0),
('width_chatrooms', '16', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_graph_log`
--

CREATE TABLE IF NOT EXISTS `arrowchat_graph_log` (
  `id` int(6) unsigned NOT NULL,
  `date` varchar(30) NOT NULL,
  `user_messages` int(10) unsigned DEFAULT '0',
  `chat_room_messages` int(10) unsigned DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_notifications`
--

CREATE TABLE IF NOT EXISTS `arrowchat_notifications` (
  `id` int(25) unsigned NOT NULL,
  `to_id` varchar(25) NOT NULL,
  `author_id` varchar(25) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `misc1` varchar(255) DEFAULT NULL,
  `misc2` varchar(255) DEFAULT NULL,
  `misc3` varchar(255) DEFAULT NULL,
  `type` int(3) unsigned NOT NULL,
  `alert_read` int(1) unsigned NOT NULL DEFAULT '0',
  `user_read` int(1) unsigned NOT NULL DEFAULT '0',
  `alert_time` int(15) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_notifications_markup`
--

CREATE TABLE IF NOT EXISTS `arrowchat_notifications_markup` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` int(3) unsigned NOT NULL,
  `markup` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arrowchat_notifications_markup`
--

INSERT INTO `arrowchat_notifications_markup` (`id`, `name`, `type`, `markup`) VALUES
(1, 'Private Messages', 1, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_message_icon.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has sent you a new message.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(2, 'Friend Requests', 2, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_friend_icon.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has sent you a friend request.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(3, 'Wall Post', 3, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_wall_post.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has wrote on your wall.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(4, 'Event Invite', 4, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_event.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has invited you to an event.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(5, 'Group Invite', 5, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_group.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has invited you to a group.<br />	<div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(6, 'Birthday', 6, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_birthday.png" class="arrowchat_notification_icon" />It is <a href="#">{author_name}</a>''s birthday!<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(7, 'Comment', 7, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_comment.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has left you a comment.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(8, 'Reply', 8, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_reply.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has replied to you.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(9, 'Like Post', 9, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_like.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has liked your post.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(10, 'Like Comment', 10, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_like.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has liked your comment.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>'),
(11, 'Like Photo', 11, '<div class="arrowchat_notification_box arrowchat_blue_link"><img src="/webeasywork/arrowchat/themes/new_facebook_full/images/icons/notification_like.png" class="arrowchat_notification_icon" /><a href="#">{author_name}</a> has liked your photo.<br /><div class="arrowchat_received">Received {longago}</div></div><div class="arrowchat_notifications_divider"></div>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_smilies`
--

CREATE TABLE IF NOT EXISTS `arrowchat_smilies` (
  `id` int(3) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arrowchat_smilies`
--

INSERT INTO `arrowchat_smilies` (`id`, `name`, `code`) VALUES
(1, 'smiley', ':)'),
(2, 'smiley-mad', '>:('),
(3, 'smiley-lol', ':D'),
(4, 'smiley-wink', ';)'),
(5, 'smiley-surprise', ':o'),
(6, 'smiley-cool', '8)'),
(7, 'smiley-neutral', ':|'),
(8, 'smiley-cry', ':''('),
(9, 'smiley-razz', ':p'),
(10, 'smiley-confuse', ':s'),
(11, 'smiley', ':-)'),
(12, 'smiley-sad', ':-('),
(13, 'smiley-wink', ';-)'),
(14, 'smiley-surprise', ':-o'),
(15, 'smiley-cool', '8-)'),
(16, 'smiley-neutral', ':-|'),
(17, 'smiley-razz', ':-p'),
(18, 'smiley-confuse', ':-s'),
(20, 'smiley-sad', ':(');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_status`
--

CREATE TABLE IF NOT EXISTS `arrowchat_status` (
  `userid` varchar(25) NOT NULL,
  `guest_name` varchar(50) DEFAULT NULL,
  `message` text,
  `status` varchar(10) DEFAULT NULL,
  `theme` int(3) unsigned DEFAULT NULL,
  `popout` int(11) unsigned DEFAULT NULL,
  `typing` text,
  `hide_bar` tinyint(1) unsigned DEFAULT NULL,
  `play_sound` tinyint(1) unsigned DEFAULT '1',
  `window_open` tinyint(1) unsigned DEFAULT NULL,
  `only_names` tinyint(1) unsigned DEFAULT NULL,
  `chatroom_window` varchar(2) NOT NULL DEFAULT '-1',
  `chatroom_stay` varchar(2) NOT NULL DEFAULT '-1',
  `chatroom_block_chats` tinyint(1) unsigned DEFAULT NULL,
  `chatroom_sound` tinyint(1) unsigned DEFAULT NULL,
  `announcement` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `unfocus_chat` text,
  `focus_chat` varchar(20) DEFAULT NULL,
  `last_message` text,
  `apps_bookmarks` text,
  `apps_other` text,
  `apps_open` int(10) unsigned DEFAULT NULL,
  `apps_load` text,
  `block_chats` text,
  `session_time` int(20) unsigned NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hash_id` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arrowchat_status`
--

INSERT INTO `arrowchat_status` (`userid`, `guest_name`, `message`, `status`, `theme`, `popout`, `typing`, `hide_bar`, `play_sound`, `window_open`, `only_names`, `chatroom_window`, `chatroom_stay`, `chatroom_block_chats`, `chatroom_sound`, `announcement`, `unfocus_chat`, `focus_chat`, `last_message`, `apps_bookmarks`, `apps_other`, `apps_open`, `apps_load`, `block_chats`, `session_time`, `is_admin`, `hash_id`) VALUES
('g9295959', NULL, NULL, 'available', NULL, NULL, NULL, 0, 1, NULL, NULL, '-1', '0', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1449807676, 0, '8o0D5cUAbDZL7pqvKbks');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_themes`
--

CREATE TABLE IF NOT EXISTS `arrowchat_themes` (
  `id` int(3) unsigned NOT NULL,
  `folder` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  `update_link` varchar(255) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `default` tinyint(1) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arrowchat_themes`
--

INSERT INTO `arrowchat_themes` (`id`, `folder`, `name`, `active`, `update_link`, `version`, `default`) VALUES
(1, 'new_facebook_full', 'New Facebook Full', 1, '', '3.3', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrowchat_trayicons`
--

CREATE TABLE IF NOT EXISTS `arrowchat_trayicons` (
  `id` int(3) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `icon` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `target` varchar(25) DEFAULT NULL,
  `width` int(4) unsigned DEFAULT NULL,
  `height` int(4) unsigned DEFAULT NULL,
  `tray_width` int(3) unsigned DEFAULT NULL,
  `tray_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tray_location` int(3) unsigned NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `sobrenome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `senha` varchar(250) DEFAULT NULL,
  `avatar` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `email`, `senha`, `avatar`) VALUES
(22, 'marilia', 'vilas boas', 'marilia_vilasboas@gmail.com', 'nick06@', ''),
(23, 'eduardo', 'petreca', 'eduardopetreca@gmail.com', 'nick06@', ''),
(24, 'leonardo', 'seixas', 'leoseixaslive@gmail.com', '102030', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_empresa`
--

CREATE TABLE IF NOT EXISTS `cadastro_empresa` (
  `id` int(11) NOT NULL,
  `id_cadastro` int(11) DEFAULT NULL,
  `avatar` longblob NOT NULL,
  `data_fundacao` varchar(10) NOT NULL,
  `telefone` int(35) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `endereco` text NOT NULL,
  `area_de_atuacao` varchar(255) NOT NULL,
  `area_de_interesse` text NOT NULL,
  `tipo_acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pessoa_fisica`
--

CREATE TABLE IF NOT EXISTS `cadastro_pessoa_fisica` (
  `id` int(11) NOT NULL,
  `id_cadastro` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `data_nascimento` varchar(10) NOT NULL,
  `telefone` int(35) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `endereco` text NOT NULL,
  `escolaridade` varchar(255) NOT NULL,
  `formacao` varchar(255) NOT NULL,
  `instituicao` varchar(255) NOT NULL,
  `experiencia_profissional` text NOT NULL,
  `tipo_acesso` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_pessoa_fisica`
--

INSERT INTO `cadastro_pessoa_fisica` (`id`, `id_cadastro`, `avatar`, `data_nascimento`, `telefone`, `sexo`, `pais`, `estado`, `cidade`, `endereco`, `escolaridade`, `formacao`, `instituicao`, `experiencia_profissional`, `tipo_acesso`) VALUES
(34, 22, 'cabelo01.jpg', '111111', 1111, '1111', '2', '2', '2', '2', '2', '2', '2', '2', 'Pessoa fÃ­sica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE IF NOT EXISTS `postagens` (
  `id` int(11) NOT NULL,
  `id_cadastro` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `postagens` text NOT NULL,
  `postagens_fotos` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `id_cadastro`, `nome`, `sobrenome`, `postagens`, `postagens_fotos`) VALUES
(14, 24, 'leonardo', 'seixas', 'Oi', ''),
(15, 22, 'marilia', 'vilas boas', 'teste', ''),
(16, 22, 'marilia', 'vilas boas', 'teste 1', ''),
(17, 22, 'marilia', 'vilas boas', 'teste', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrowchat`
--
ALTER TABLE `arrowchat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `to` (`to`),
  ADD KEY `read` (`read`),
  ADD KEY `user_read` (`user_read`),
  ADD KEY `from` (`from`);

--
-- Indexes for table `arrowchat_admin`
--
ALTER TABLE `arrowchat_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrowchat_applications`
--
ALTER TABLE `arrowchat_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrowchat_banlist`
--
ALTER TABLE `arrowchat_banlist`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `arrowchat_chatroom_banlist`
--
ALTER TABLE `arrowchat_chatroom_banlist`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `chatroom_id` (`chatroom_id`);

--
-- Indexes for table `arrowchat_chatroom_messages`
--
ALTER TABLE `arrowchat_chatroom_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chatroom_id` (`chatroom_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sent` (`sent`);

--
-- Indexes for table `arrowchat_chatroom_rooms`
--
ALTER TABLE `arrowchat_chatroom_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_time` (`session_time`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `arrowchat_chatroom_users`
--
ALTER TABLE `arrowchat_chatroom_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `chatroom_id` (`chatroom_id`),
  ADD KEY `is_admin` (`is_admin`),
  ADD KEY `is_mod` (`is_mod`),
  ADD KEY `session_time` (`session_time`);

--
-- Indexes for table `arrowchat_config`
--
ALTER TABLE `arrowchat_config`
  ADD UNIQUE KEY `config_name` (`config_name`);

--
-- Indexes for table `arrowchat_graph_log`
--
ALTER TABLE `arrowchat_graph_log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `arrowchat_notifications`
--
ALTER TABLE `arrowchat_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `to_id` (`to_id`),
  ADD KEY `alert_read` (`alert_read`),
  ADD KEY `user_read` (`user_read`),
  ADD KEY `alert_time` (`alert_time`);

--
-- Indexes for table `arrowchat_notifications_markup`
--
ALTER TABLE `arrowchat_notifications_markup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrowchat_smilies`
--
ALTER TABLE `arrowchat_smilies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrowchat_status`
--
ALTER TABLE `arrowchat_status`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `hash_id` (`hash_id`),
  ADD KEY `session_time` (`session_time`);

--
-- Indexes for table `arrowchat_themes`
--
ALTER TABLE `arrowchat_themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrowchat_trayicons`
--
ALTER TABLE `arrowchat_trayicons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_empresa`
--
ALTER TABLE `cadastro_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_pessoa_fisica`
--
ALTER TABLE `cadastro_pessoa_fisica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cadastro` (`id_cadastro`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrowchat`
--
ALTER TABLE `arrowchat`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arrowchat_admin`
--
ALTER TABLE `arrowchat_admin`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `arrowchat_applications`
--
ALTER TABLE `arrowchat_applications`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arrowchat_banlist`
--
ALTER TABLE `arrowchat_banlist`
  MODIFY `ban_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arrowchat_chatroom_messages`
--
ALTER TABLE `arrowchat_chatroom_messages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arrowchat_chatroom_rooms`
--
ALTER TABLE `arrowchat_chatroom_rooms`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arrowchat_graph_log`
--
ALTER TABLE `arrowchat_graph_log`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arrowchat_notifications`
--
ALTER TABLE `arrowchat_notifications`
  MODIFY `id` int(25) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arrowchat_notifications_markup`
--
ALTER TABLE `arrowchat_notifications_markup`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `arrowchat_smilies`
--
ALTER TABLE `arrowchat_smilies`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `arrowchat_themes`
--
ALTER TABLE `arrowchat_themes`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `arrowchat_trayicons`
--
ALTER TABLE `arrowchat_trayicons`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cadastro_empresa`
--
ALTER TABLE `cadastro_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cadastro_pessoa_fisica`
--
ALTER TABLE `cadastro_pessoa_fisica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro_pessoa_fisica`
--
ALTER TABLE `cadastro_pessoa_fisica`
  ADD CONSTRAINT `id_cadastro` FOREIGN KEY (`id_cadastro`) REFERENCES `cadastro` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
