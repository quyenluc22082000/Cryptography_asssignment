CREATE DATABASE 'crypt_db'
USE DATABASE 'crypt_db'
GO

CREATE TABLE `userlog` (
  `id` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;