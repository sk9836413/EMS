create database  pms;

use pms;


CREATE TABLE IF NOT EXISTS `salary` (
  `emp_id` varchar(8) NOT NULL,
  `dept_id` varchar(8) NOT NULL,
  `sal_amt` int(7) NOT NULL,
  `overtime` int(7) NOT NULL,
  `halftime` int(7) NOT NULL,
  `expense` int(7) NOT NULL,
  `hra` int(7) NOT NULL,
  `da` int(7) NOT NULL,
  `ta` int(7) NOT NULL,
  `pres_days` int(3) NOT NULL,
  `leave_days` int(3) NOT NULL,
  `holidays` int(3) NOT NULL
  `gr_sal` int(8) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
