#
# Table structure for table 'tx_skitourenroutenlist_domain_model_route'
#
CREATE TABLE tx_skitourenroutenlist_domain_model_route (

	routenname varchar(255) DEFAULT '' NOT NULL,
	lawinengefahr int(11) DEFAULT '0' NOT NULL,
	gesamtanspruch int(11) DEFAULT '0' NOT NULL,
	skitechnischebewertung varchar(255) DEFAULT '' NOT NULL,
	hoehenmeter int(11) DEFAULT '0' NOT NULL,
	gehzeit varchar(255) DEFAULT '' NOT NULL,
	schoenheit int(11) DEFAULT '0' NOT NULL,

);
