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
	beliebtheit int(11) DEFAULT '0' NOT NULL,
	hangexposition varchar(255) DEFAULT '' NOT NULL,
	mountainregion_name varchar(255) DEFAULT '' NOT NULL,
	mountain_name varchar(255) DEFAULT '' NOT NULL,
	mountain_height int(11) DEFAULT '0' NOT NULL,
	mountain_latitude double(11,2) DEFAULT '0.00' NOT NULL,
	mountain_longitude double(11,2) DEFAULT '0.00' NOT NULL,

);

#
# Table structure for table 'tx_skitourenroutenlist_domain_model_maps'
#
CREATE TABLE tx_skitourenroutenlist_domain_model_maps (

	name varchar(255) DEFAULT '' NOT NULL,
	ean int(11) DEFAULT '0' NOT NULL,
	kartenreihe varchar(255) DEFAULT '' NOT NULL,
	kartennummer varchar(255) DEFAULT '' NOT NULL,
	typ varchar(255) DEFAULT '' NOT NULL,
	massstab varchar(255) DEFAULT '' NOT NULL,
	preis varchar(255) DEFAULT '' NOT NULL,
	verlag varchar(255) DEFAULT '' NOT NULL,
	link varchar(255) DEFAULT '' NOT NULL,

);
