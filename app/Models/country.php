<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
}
// $a="All Worldwide, All
// ;United States Only, US
// ;United Kingdom Only, UK
// ;Canada Only, CA
// ;Australia Only, AU

// ;Afghanistan, AF
// ;Aland Islands, AX
// ;Albania, AL
// ;Algeria, DZ
// ;American Samoa, AS
// ;Andorra, AD
// ;Angola, AO
// ;Anguilla, AI
// ;Antarctica, AQ
// ;Antigua/Barbuda, AG
// ;Argentina, AR
// ;Armenia, AM
// ;Aruba, AW
// ;Austria, AT
// ;Azerbaijan, AZ
// ;Bahamas, BS
// ;Bahrain, BH
// ;Bangladesh, BD
// ;Barbados, BB
// ;Belarus, BY
// ;Belgium, BE
// ;Belize, BZ
// ;Benin, BJ
// ;Bermuda, BM
// ;Bhutan, BT
// ;Bolivia, BO
// ;Bosnia-Herzegovina, BA
// ;Botswana, BW
// ;Bouvet Island, BV
// ;Brazil, BR
// ;British Virgin Islands, VG
// ;British Indian Ocean Territory, IO 
// ;Brunei, BN
// ;Bulgaria, BG
// ;Burkina Faso, BF
// ;Burundi, BI
// ;Cambodia, KH
// ;Cameroon, CM
// ;Cape Verde, CV
// ;Cayman Islands, KY
// ;Central African Republic, CF
// ;Chad, TD
// ;Chile, CL
// ;China, CN
// ;Hong Kong, HK
// ;Macao, MO
// ;Christmas Island, CX
// ;Cocos Islands, CC
// ;Colombia, CO
// ;Comoros, KM
// ;Congo (Brazzaville), CG
// ;Congo (Kinshasa), CD
// ;Cook Islands, CK
// ;Costa Rica, CR
// ;Côte d'Ivoire, CI
// ;Croatia, HR
// ;Cuba, CU
// ;Cyprus, CY
// ;Czech Republic, CZ
// ;Denmark, DK
// ;Djibouti, DJ
// ;Dominica, DM
// ;Dominican Republic, DO
// ;Ecuador, EC
// ;Egypt, EG
// ;El Salvador, SV
// ;Equatorial Guinea, GQ
// ;Eritrea, ER
// ;Estonia, EE
// ;Ethiopia, ET
// ;Falkland Islands, FK
// ;Faroe Islands, FO
// ;Fiji, FJ
// ;Finland, FI
// ;France, FR
// ;French Guiana, GF
// ;French Polynesia, PF
// ;French Southern Territories, TF 
// ;Gabon, GA
// ;Gambia, GM
// ;Georgia, GE
// ;Germany, DE
// ;Ghana, GH
// ;Gibraltar, GI
// ;Greece, GR
// ;Greenland, GL
// ;Grenada, GD
// ;Guadeloupe, GP
// ;Guam, GU
// ;Guatemala, GT
// ;Guernsey, GG
// ;Guinea, GN
// ;Guinea-Bissau, GW
// ;Guyana, GY
// ;Haiti, HT
// ;Heard & Mc Donald Islands, HM
// ;Holy See, VA
// ;Honduras, HN
// ;Hungary, HU
// ;Iceland, IS
// ;India, IN
// ;Indonesia, ID
// ;Iran, IR
// ;Iraq, IQ
// ;Ireland, IE
// ;Isle of Man, IM
// ;Israel, IL
// ;Italy, IT
// ;Jamaica, JM
// ;Japan, JP
// ;Jersey, JE
// ;Jordan, JO
// ;Kazakhstan, KZ
// ;Kenya, KE
// ;Kiribati, KI
// ;Korea (North), KP
// ;Korea (South), KR
// ;Kuwait, KW
// ;Kyrgyzstan, KG
// ;Lao, LA
// ;Latvia, LV
// ;Lebanon, LB
// ;Lesotho, LS
// ;Liberia, LR
// ;Libya, LY
// ;Liechtenstein, LI
// ;Lithuania, LT
// ;Luxembourg, LU
// ;Macedonia, MK
// ;Madagascar, MG
// ;Malawi, MW
// ;Malaysia, MY
// ;Maldives, MV
// ;Mali, ML
// ;Malta, MT
// ;Marshall Islands, MH
// ;Martinique, MQ
// ;Mauritania, MR
// ;Mauritius, MU
// ;Mayotte, YT
// ;Mexico, MX
// ;Micronesia, FM
// ;Moldova, MD
// ;Monaco, MC
// ;Mongolia, MN
// ;Montenegro, ME
// ;Montserrat, MS
// ;Morocco, MA
// ;Mozambique, MZ
// ;Myanmar, MM
// ;Namibia, NA
// ;Nauru, NR
// ;Nepal, NP
// ;Netherlands, NL
// ;Netherlands Antilles, AN
// ;New Caledonia, NC
// ;New Zealand, NZ
// ;Nicaragua, NI
// ;Niger, NE
// ;Nigeria, NG
// ;Niue, NU
// ;Norfolk Island, NF
// ;Northern Mariana Islands, MP
// ;Norway, NO
// ;Oman, OM
// ;Pakistan, PK
// ;Palau, PW
// ;Palestinian Territory, PS
// ;Panama, PA
// ;Papua New Guinea, PG
// ;Paraguay, PY
// ;Peru, PE
// ;Philippines, PH
// ;Pitcairn, PN
// ;Poland, PL
// ;Portugal, PT
// ;Puerto Rico, PR
// ;Qatar, QA
// ;Réunion, RE
// ;Romania, RO
// ;Russia, RU
// ;Rwanda, RW
// ;St. Barthélemy, BL
// ;St. Helena, SH
// ;St.  Kitts & Nevis, KN
// ;St. Lucia, LC
// ;St. Martin, MF
// ;St. Pierre & Miquelon, PM
// ;St. Vincent & Grenadines, VC
// ;Samoa, WS
// ;San Marino, SM
// ;Sao Tome & Principe, ST
// ;Saudi Arabia, SA
// ;Senegal, SN
// ;Serbia, RS
// ;Seychelles, SC
// ;Sierra Leone, SL
// ;Singapore, SG
// ;Slovakia, SK
// ;Slovenia, SI
// ;Solomon Islands, SB
// ;Somalia, SO
// ;South Africa, ZA
// ;South Georgia & South Sandwich Islands, GS
// ;South Sudan, SS
// ;Spain, ES
// ;Sri Lanka, LK
// ;Sudan, SD
// ;Suriname, SR
// ;Svalbard & Jan Mayen Islands, SJ
// ;Swaziland, SZ
// ;Sweden, SE
// ;Switzerland, CH
// ;Syria, SY
// ;Taiwan, TW
// ;Tajikistan, TJ
// ;Tanzania, TZ
// ;Thailand, TH
// ;Timor-Leste, TL
// ;Togo, TG
// ;Tokelau, TK
// ;Tonga, TO
// ;Trinidad and Tobago, TT
// ;Tunisia, TN
// ;Turkey, TR
// ;Turkmenistan, TM
// ;Turks & Caicos Islands, TC
// ;Tuvalu, TV
// ;Uganda, UG
// ;Ukraine, UA
// ;United Arab Emirates, AE
// ;US Minor Islands, UM
// ;Uruguay, UY
// ;Uzbekistan, UZ
// ;Vanuatu, VU
// ;Venezuela, VE
// ;Viet Nam, VN
// ;Virgin Islands, VI
// ;Wallis & Futuna Islands, WF
// ;Western Sahara, EH
// ;Yemen, YE
// ;Zambia, ZM
// ;Zimbabwe, ZW
// ";
// $pieces = explode(";", $a);
// foreach ($pieces as $v) {
//     $pieces = explode(",", $v);
//     print_r($pieces);echo'<br>';
//     $c=new country();
//     $c->country1=$pieces[0];
//     $c->country2=$pieces[1];
//     $c->save();
// }