/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  RTG
 * Created: Mar 24, 2017
 */

# Add this query into your SQL Query area

CREATE TABLE user (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    first varchar(128) not null,
    last varchar(128) not null,
    uid varchar(128) not null,
    pwd TEXT not null
)