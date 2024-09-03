CREATE TABLE `t_user` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE `t_user`
ADD UNIQUE (`email`);

ALTER TABLE `t_user`
ADD UNIQUE (`phone`);

CREATE TABLE `eprescription` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `doctor` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `patient_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `patient_phone` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `patient_age` int NOT NULL,
  `patient_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `patient_sex` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `patient_weight` float NOT NULL,
  `diadnosis` text COLLATE utf8mb4_general_ci NOT NULL,
  `medications` text COLLATE utf8mb4_general_ci,
  `alergi` tinyint(1) DEFAULT NULL,
  `alergi_desc` text COLLATE utf8mb4_general_ci,
  `user_id` int NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
);