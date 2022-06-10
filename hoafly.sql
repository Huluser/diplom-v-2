
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- База данных: `hoafly`
--

CREATE TABLE `light_readings` (
  `id_dog` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `readings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `water_readings` (
	`id_dog` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `hot_water` varchar(255) NOT NULL,
  `cold_water` varchar(255) NOT NULL,
  `hot_water2` varchar(255) NOT NULL,
  `cold_water2` varchar(255) NOT NULL,
  `hot_water3` varchar(255) NOT NULL,
  `cold_water3` varchar(255) NOT NULL,
  `hot_water4` varchar(255) NOT NULL,
  `cold_water4` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ALTER TABLE `users`
--   ADD PRIMARY KEY (`id`),
--   ADD UNIQUE KEY `username` (`username`);

-- ALTER TABLE `users`
--   MODIFY `id` int NOT NULL AUTO_INCREMENT;
-- COMMIT;
