<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ["code" => "AD", "en" => "Andorra", "de" => "Andorra", "es" => "Andorra", "fr" => "Andorre", "it" => "Andorra"],
            ["code" => "AE", "en" => "United Arab Emirates", "de" => "Vereinigte Arabische Emirate", "es" => "Emiratos Árabes Unidos", "fr" => "Émirats Arabes Unis", "it" => "Emirati Arabi Uniti"],
            ["code" => "AF", "en" => "Afghanistan", "de" => "Afghanistan", "es" => "Afganistán", "fr" => "Afghanistan", "it" => "Afghanistan"],
            ["code" => "AG", "en" => "Antigua and Barbuda", "de" => "Antigua und Barbuda", "es" => "Antigua y Barbuda", "fr" => "Antigua-Et-Barbuda", "it" => "Antigua e Barbuda"],
            ["code" => "AI", "en" => "Anguilla", "de" => "Anguilla", "es" => "Anguila", "fr" => "Anguilla", "it" => "Anguilla"],
            ["code" => "AL", "en" => "Albania", "de" => "Albanien", "es" => "Albania", "fr" => "Albanie", "it" => "Albania"],
            ["code" => "AM", "en" => "Armenia", "de" => "Armenien", "es" => "Armenia", "fr" => "Arménie", "it" => "Armenia"],
            ["code" => "AN", "en" => "Netherlands Antilles", "de" => "Niederländische Antillen", "es" => "Antillas Neerlandesas", "fr" => "Antillas Neerlandesas", "it" => "Antillas Neerlandesas"],
            ["code" => "AO", "en" => "Angola", "de" => "Angola", "es" => "Angola", "fr" => "Angola", "it" => "Angola"],
            ["code" => "AQ", "en" => "Antarctica", "de" => "Antarktis", "es" => "Antártida", "fr" => "Antarctique", "it" => "Antartide"],
            ["code" => "AR", "en" => "Argentina", "de" => "Argentinien", "es" => "Argentina", "fr" => "Argentine", "it" => "Argentina"],
            ["code" => "AS", "en" => "American Samoa", "de" => "Amerikanisch-Samoa", "es" => "Samoa Americana", "fr" => "Samoa Américaines", "it" => "Samoa Americane"],
            ["code" => "AT", "en" => "Austria", "de" => "Österreich", "es" => "Austria", "fr" => "Autriche", "it" => "Austria"],
            ["code" => "AU", "en" => "Australia", "de" => "Australien", "es" => "Australia", "fr" => "Australie", "it" => "Australia"],
            ["code" => "AW", "en" => "Aruba", "de" => "Aruba", "es" => "Aruba", "fr" => "Aruba", "it" => "Aruba"],
            ["code" => "AX", "en" => "Aland Islands", "de" => "Åland", "es" => "Islas Áland", "fr" => "Åland, Îles", "it" => "Isole Åland"],
            ["code" => "AZ", "en" => "Azerbaijan", "de" => "Aserbaidschan", "es" => "Azerbaiyán", "fr" => "Azerbaïdjan", "it" => "Azerbaigian"],
            ["code" => "BA", "en" => "Bosnia and Herzegovina", "de" => "Bosnien und Herzegowina", "es" => "Bosnia y Herzegovina", "fr" => "Bosnie-Herzégovine", "it" => "Bosnia ed Erzegovina"],
            ["code" => "BB", "en" => "Barbados", "de" => "Barbados", "es" => "Barbados", "fr" => "Barbade", "it" => "Barbados"],
            ["code" => "BD", "en" => "Bangladesh", "de" => "Bangladesch", "es" => "Bangladesh", "fr" => "Bangladesh", "it" => "Bangladesh"],
            ["code" => "BE", "en" => "Belgium", "de" => "Belgien", "es" => "Bélgica", "fr" => "Belgique", "it" => "Belgio"],
            ["code" => "BF", "en" => "Burkina Faso", "de" => "Burkina Faso", "es" => "Burkina Faso", "fr" => "Burkina Faso", "it" => "Burkina Faso"],
            ["code" => "BG", "en" => "Bulgaria", "de" => "Bulgarien", "es" => "Bulgaria", "fr" => "Bulgarie", "it" => "Bulgaria"],
            ["code" => "BH", "en" => "Bahrain", "de" => "Bahrain", "es" => "Bahréin", "fr" => "Bahreïn", "it" => "Bahrein"],
            ["code" => "BI", "en" => "Burundi", "de" => "Burundi", "es" => "Burundi", "fr" => "Burundi", "it" => "Burundi"],
            ["code" => "BJ", "en" => "Benin", "de" => "Benin", "es" => "Benin", "fr" => "Bénin", "it" => "Benin"],
            ["code" => "BM", "en" => "Bermuda", "de" => "Bermuda", "es" => "Bermudas", "fr" => "Bermudes", "it" => "Bermuda"],
            ["code" => "BN", "en" => "Brunei", "de" => "Brunei Darussalam", "es" => "Brunéi", "fr" => "Brunéi Darussalam", "it" => "Brunei"],
            ["code" => "BO", "en" => "Bolivia", "de" => "Bolivien", "es" => "Bolivia", "fr" => "Bolivie, État Plurinational De", "it" => "Bolivia"],
            ["code" => "BR", "en" => "Brazil", "de" => "Brasilien", "es" => "Brasil", "fr" => "Brésil", "it" => "Brasile"],
            ["code" => "BS", "en" => "Bahamas", "de" => "Bahamas", "es" => "Bahamas", "fr" => "Bahamas", "it" => "Bahamas"],
            ["code" => "BT", "en" => "Bhutan", "de" => "Bhutan", "es" => "Bhután", "fr" => "Bhoutan", "it" => "Bhutan"],
            ["code" => "BV", "en" => "Bouvet Island", "de" => "Bouvetinsel", "es" => "Isla Bouvet", "fr" => "Bouvet, Île", "it" => "Isola Bouvet"],
            ["code" => "BW", "en" => "Botswana", "de" => "Botswana", "es" => "Botsuana", "fr" => "Botswana", "it" => "Botswana"],
            ["code" => "BY", "en" => "Belarus", "de" => "Belarus (Weißrussland)", "es" => "Belarús", "fr" => "Bélarus", "it" => "Bielorussia"],
            ["code" => "BZ", "en" => "Belize", "de" => "Belize", "es" => "Belice", "fr" => "Belize", "it" => "Belize"],
            ["code" => "CA", "en" => "Canada", "de" => "Kanada", "es" => "Canadá", "fr" => "Canada", "it" => "Canada"],
            ["code" => "CC", "en" => "Cocos (Keeling) Islands", "de" => "Kokosinseln (Keelinginseln)", "es" => "Islas Cocos", "fr" => "Cocos (Keeling), Îles", "it" => "Isole Cocos (Keeling)"],
            ["code" => "CD", "en" => "Congo (Kinshasa)", "de" => "Kongo", "es" => "Congo", "fr" => "Congo, La République Démocratique Du", "it" => "RD del Congo"],
            ["code" => "CF", "en" => "Central African Republic", "de" => "Zentralafrikanische Republik", "es" => "República Centro-Africana", "fr" => "Centrafricaine, République", "it" => "Rep. Centrafricana"],
            ["code" => "CG", "en" => "Congo (Brazzaville)", "de" => "Republik Kongo", "es" => "Congo", "fr" => "Congo", "it" => "Rep. del Congo"],
            ["code" => "CH", "en" => "Switzerland", "de" => "Schweiz", "es" => "Suiza", "fr" => "Suisse", "it" => "Svizzera"],
            ["code" => "CI", "en" => "Ivory Coast", "de" => "Elfenbeinküste", "es" => "Costa de Marfil", "fr" => "Côte D’Ivoire", "it" => "Costa d'Avorio"],
            ["code" => "CK", "en" => "Cook Islands", "de" => "Cookinseln", "es" => "Islas Cook", "fr" => "Cook, Îles", "it" => "Isole Cook"],
            ["code" => "CL", "en" => "Chile", "de" => "Chile", "es" => "Chile", "fr" => "Chili", "it" => "Cile"],
            ["code" => "CM", "en" => "Cameroon", "de" => "Kamerun", "es" => "Camerún", "fr" => "Cameroun", "it" => "Camerun"],
            ["code" => "CN", "en" => "China", "de" => "China, Volksrepublik", "es" => "China", "fr" => "Chine", "it" => "Cina"],
            ["code" => "CO", "en" => "Colombia", "de" => "Kolumbien", "es" => "Colombia", "fr" => "Colombie", "it" => "Colombia"],
            ["code" => "CR", "en" => "Costa Rica", "de" => "Costa Rica", "es" => "Costa Rica", "fr" => "Costa Rica", "it" => "Costa Rica"],
            ["code" => "CU", "en" => "Cuba", "de" => "Kuba", "es" => "Cuba", "fr" => "Cuba", "it" => "Cuba"],
            ["code" => "CV", "en" => "Cape Verde", "de" => "Kap Verde", "es" => "Cabo Verde", "fr" => "Cabo Verde", "it" => "Capo Verde"],
            ["code" => "CX", "en" => "Christmas Island", "de" => "Weihnachtsinsel", "es" => "Islas Christmas", "fr" => "Christmas, Île", "it" => "Isola di Natale"],
            ["code" => "CY", "en" => "Cyprus", "de" => "Zypern", "es" => "Chipre", "fr" => "Chypre", "it" => "Cipro"],
            ["code" => "CZ", "en" => "Czech Republic", "de" => "Tschechische Republik", "es" => "República Checa", "fr" => "Tchèque, République", "it" => "Rep. Ceca"],
            ["code" => "DE", "en" => "Germany", "de" => "Deutschland", "es" => "Alemania", "fr" => "Allemagne", "it" => "Germania"],
            ["code" => "DJ", "en" => "Djibouti", "de" => "Dschibuti", "es" => "Yibuti", "fr" => "Djibouti", "it" => "Gibuti"],
            ["code" => "DK", "en" => "Denmark", "de" => "Dänemark", "es" => "Dinamarca", "fr" => "Danemark", "it" => "Danimarca"],
            ["code" => "DM", "en" => "Dominica", "de" => "Dominica", "es" => "Domínica", "fr" => "Dominique", "it" => "Dominica"],
            ["code" => "DO", "en" => "Dominican Republic", "de" => "Dominikanische Republik", "es" => "República Dominicana", "fr" => "Dominicaine, République", "it" => "Rep. Dominicana"],
            ["code" => "DZ", "en" => "Algeria", "de" => "Algerien", "es" => "Argelia", "fr" => "Algérie", "it" => "Algeria"],
            ["code" => "EC", "en" => "Ecuador", "de" => "Ecuador", "es" => "Ecuador", "fr" => "Équateur", "it" => "Ecuador"],
            ["code" => "EE", "en" => "Estonia", "de" => "Estland (Reval)", "es" => "Estonia", "fr" => "Estonie", "it" => "Estonia"],
            ["code" => "EG", "en" => "Egypt", "de" => "Ägypten", "es" => "Egipto", "fr" => "Égypte", "it" => "Egitto"],
            ["code" => "EH", "en" => "Western Sahara", "de" => "Westsahara", "es" => "Sahara Occidental", "fr" => "Sahara Occidental", "it" => "Sahara Occidentale"],
            ["code" => "ER", "en" => "Eritrea", "de" => "Eritrea", "es" => "Eritrea", "fr" => "Érythrée", "it" => "Eritrea"],
            ["code" => "ES", "en" => "Spain", "de" => "Spanien", "es" => "España", "fr" => "Espagne", "it" => "Spagna"],
            ["code" => "ET", "en" => "Ethiopia", "de" => "Äthiopien", "es" => "Etiopía", "fr" => "Éthiopie", "it" => "Etiopia"],
            ["code" => "FI", "en" => "Finland", "de" => "Finnland", "es" => "Finlandia", "fr" => "Finlande", "it" => "Finlandia"],
            ["code" => "FJ", "en" => "Fiji", "de" => "Fidschi", "es" => "Fiji", "fr" => "Fidji", "it" => "Figi"],
            ["code" => "FK", "en" => "Falkland Islands", "de" => "Falklandinseln (Malwinen)", "es" => "Islas Malvinas", "fr" => "Falkland, Îles (Malvinas)", "it" => "Isole Falkland"],
            ["code" => "FM", "en" => "Micronesia", "de" => "Mikronesien", "es" => "Micronesia", "fr" => "Micronésie, États Fédérés De", "it" => "Micronesia"],
            ["code" => "FO", "en" => "Faroe Islands", "de" => "Färöer", "es" => "Islas Faroe", "fr" => "Féroé, Îles", "it" => "Fær Øer"],
            ["code" => "FR", "en" => "France", "de" => "Frankreich", "es" => "Francia", "fr" => "France", "it" => "Francia"],
            ["code" => "GA", "en" => "Gabon", "de" => "Gabun", "es" => "Gabón", "fr" => "Gabon", "it" => "Gabon"],
            ["code" => "GB", "en" => "United Kingdom", "de" => "Großbritannien und Nordirland", "es" => "Reino Unido", "fr" => "Royaume-Uni", "it" => "Regno Unito"],
            ["code" => "GD", "en" => "Grenada", "de" => "Grenada", "es" => "Granada", "fr" => "Grenade", "it" => "Grenada"],
            ["code" => "GE", "en" => "Georgia", "de" => "Georgien", "es" => "Georgia", "fr" => "Géorgie", "it" => "Georgia"],
            ["code" => "GF", "en" => "French Guiana", "de" => "Französisch-Guayana", "es" => "Guayana Francesa", "fr" => "Guyane Française", "it" => "Guyana francese"],
            ["code" => "GG", "en" => "Guernsey", "de" => "Guernsey (Kanalinsel)", "es" => "Guernsey", "fr" => "Guernesey", "it" => "Guernsey"],
            ["code" => "GH", "en" => "Ghana", "de" => "Ghana", "es" => "Ghana", "fr" => "Ghana", "it" => "Ghana"],
            ["code" => "GI", "en" => "Gibraltar", "de" => "Gibraltar", "es" => "Gibraltar", "fr" => "Gibraltar", "it" => "Gibilterra"],
            ["code" => "GL", "en" => "Greenland", "de" => "Grönland", "es" => "Groenlandia", "fr" => "Groenland", "it" => "Groenlandia"],
            ["code" => "GM", "en" => "Gambia", "de" => "Gambia", "es" => "Gambia", "fr" => "Gambie", "it" => "Gambia"],
            ["code" => "GN", "en" => "Guinea", "de" => "Guinea", "es" => "Guinea", "fr" => "Guinée", "it" => "Guinea"],
            ["code" => "GP", "en" => "Guadeloupe", "de" => "Guadeloupe", "es" => "Guadalupe", "fr" => "Guadeloupe", "it" => "Guadalupa"],
            ["code" => "GQ", "en" => "Equatorial Guinea", "de" => "Äquatorialguinea", "es" => "Guinea Ecuatorial", "fr" => "Guinée Équatoriale", "it" => "Guinea Equatoriale"],
            ["code" => "GR", "en" => "Greece", "de" => "Griechenland", "es" => "Grecia", "fr" => "Grèce", "it" => "Grecia"],
            ["code" => "GS", "en" => "South Georgia and the South Sandwich Islands", "de" => "Südgeorgien und die Südl. Sandwichinseln", "es" => "Georgia del Sur e Islas Sandwich del Sur", "fr" => "Géorgie Du Sud Et Les Îles Sandwich Du Sud", "it" => "Georgia del Sud e isole Sandwich meridionali"],
            ["code" => "GT", "en" => "Guatemala", "de" => "Guatemala", "es" => "Guatemala", "fr" => "Guatemala", "it" => "Guatemala"],
            ["code" => "GU", "en" => "Guam", "de" => "Guam", "es" => "Guam", "fr" => "Guam", "it" => "Guam"],
            ["code" => "GW", "en" => "Guinea-Bissau", "de" => "Guinea-Bissau", "es" => "Guinea-Bissau", "fr" => "Guinée-Bissau", "it" => "Guinea-Bissau"],
            ["code" => "GY", "en" => "Guyana", "de" => "Guyana", "es" => "Guayana", "fr" => "Guyana", "it" => "Guyana"],
            ["code" => "HK", "en" => "Hong Kong S.A.R., China", "de" => "Hongkong", "es" => "Hong Kong", "fr" => "Hong Kong", "it" => "Hong Kong"],
            ["code" => "HM", "en" => "Heard Island and McDonald Islands", "de" => "Heard- und McDonald-Inseln", "es" => "Islas Heard y McDonald", "fr" => "Heard Et Macdonald, Îles", "it" => "Isole Heard e McDonald"],
            ["code" => "HN", "en" => "Honduras", "de" => "Honduras", "es" => "Honduras", "fr" => "Honduras", "it" => "Honduras"],
            ["code" => "HR", "en" => "Croatia", "de" => "Kroatien", "es" => "Croacia", "fr" => "Croatie", "it" => "Croazia"],
            ["code" => "HT", "en" => "Haiti", "de" => "Haiti", "es" => "Haití", "fr" => "Haïti", "it" => "Haiti"],
            ["code" => "HU", "en" => "Hungary", "de" => "Ungarn", "es" => "Hungría", "fr" => "Hongrie", "it" => "Ungheria"],
            ["code" => "ID", "en" => "Indonesia", "de" => "Indonesien", "es" => "Indonesia", "fr" => "Indonésie", "it" => "Indonesia"],
            ["code" => "IE", "en" => "Ireland", "de" => "Irland", "es" => "Irlanda", "fr" => "Irlande", "it" => "Irlanda"],
            ["code" => "IL", "en" => "Israel", "de" => "Israel", "es" => "Israel", "fr" => "Israël", "it" => "Israele"],
            ["code" => "IM", "en" => "Isle of Man", "de" => "Insel Man", "es" => "Isla de Man", "fr" => "Île De Man", "it" => "Isola di Man"],
            ["code" => "IN", "en" => "India", "de" => "Indien", "es" => "India", "fr" => "Inde", "it" => "India"],
            ["code" => "IO", "en" => "British Indian Ocean Territory", "de" => "Britisches Territorium im Indischen Ozean", "es" => "Territorio Británico del Océano Índico", "fr" => "Océan Indien, Territoire Britannique De L'", "it" => "Territorio britannico dell'oceano"],
            ["code" => "IQ", "en" => "Iraq", "de" => "Irak", "es" => "Irak", "fr" => "Iraq", "it" => "Iraq"],
            ["code" => "IR", "en" => "Iran", "de" => "Iran", "es" => "Irán", "fr" => "Iran, République Islamique D'", "it" => "Iran"],
            ["code" => "IS", "en" => "Iceland", "de" => "Island", "es" => "Islandia", "fr" => "Islande", "it" => "Islanda"],
            ["code" => "IT", "en" => "Italy", "de" => "Italien", "es" => "Italia", "fr" => "Italie", "it" => "Italia"],
            ["code" => "JE", "en" => "Jersey", "de" => "Jersey (Kanalinsel)", "es" => "Jersey", "fr" => "Jersey", "it" => "Jersey"],
            ["code" => "JM", "en" => "Jamaica", "de" => "Jamaika", "es" => "Jamaica", "fr" => "Jamaïque", "it" => "Giamaica"],
            ["code" => "JO", "en" => "Jordan", "de" => "Jordanien", "es" => "Jordania", "fr" => "Jordanie", "it" => "Giordania"],
            ["code" => "JP", "en" => "Japan", "de" => "Japan", "es" => "Japón", "fr" => "Japon", "it" => "Giappone"],
            ["code" => "KE", "en" => "Kenya", "de" => "Kenia", "es" => "Kenia", "fr" => "Kenya", "it" => "Kenya"],
            ["code" => "KG", "en" => "Kyrgyzstan", "de" => "Kirgisistan", "es" => "Kirguistán", "fr" => "Kirghizistan", "it" => "Kirghizistan"],
            ["code" => "KH", "en" => "Cambodia", "de" => "Kambodscha", "es" => "Camboya", "fr" => "Cambodge", "it" => "Cambogia"],
            ["code" => "KI", "en" => "Kiribati", "de" => "Kiribati", "es" => "Kiribati", "fr" => "Kiribati", "it" => "Kiribati"],
            ["code" => "KM", "en" => "Comoros", "de" => "Komoren", "es" => "Comoros", "fr" => "Comores", "it" => "Comore"],
            ["code" => "KN", "en" => "Saint Kitts and Nevis", "de" => "St. Kitts und Nevis", "es" => "San Cristóbal y Nieves", "fr" => "Saint-Kitts-Et-Nevis", "it" => "Saint Kitts e Nevis"],
            ["code" => "KP", "en" => "North Korea", "de" => "Nordkorea", "es" => "Corea del Norte", "fr" => "Corée, République Populaire Démocratique De", "it" => "Corea del Nord"],
            ["code" => "KR", "en" => "South Korea", "de" => "Südkorea", "es" => "Corea del Sur", "fr" => "Corée, République De", "it" => "Corea del Sud"],
            ["code" => "KW", "en" => "Kuwait", "de" => "Kuwait", "es" => "Kuwait", "fr" => "Koweït", "it" => "Kuwait"],
            ["code" => "KY", "en" => "Cayman Islands", "de" => "Kaimaninseln", "es" => "Islas Caimán", "fr" => "Caïmanes, Îles", "it" => "Isole Cayman"],
            ["code" => "KZ", "en" => "Kazakhstan", "de" => "Kasachstan", "es" => "Kazajstán", "fr" => "Kazakhstan", "it" => "Kazakistan"],
            ["code" => "LA", "en" => "Laos", "de" => "Laos", "es" => "Laos", "fr" => "Lao, République Démocratique Populaire", "it" => "Laos"],
            ["code" => "LB", "en" => "Lebanon", "de" => "Libanon", "es" => "Líbano", "fr" => "Liban", "it" => "Libano"],
            ["code" => "LC", "en" => "Saint Lucia", "de" => "St. Lucia", "es" => "Santa Lucía", "fr" => "Sainte-Lucie", "it" => "Santa Lucia"],
            ["code" => "LI", "en" => "Liechtenstein", "de" => "Liechtenstein", "es" => "Liechtenstein", "fr" => "Liechtenstein", "it" => "Liechtenstein"],
            ["code" => "LK", "en" => "Sri Lanka", "de" => "Sri Lanka", "es" => "Sri Lanka", "fr" => "Sri Lanka", "it" => "Sri Lanka"],
            ["code" => "LR", "en" => "Liberia", "de" => "Liberia", "es" => "Liberia", "fr" => "Libéria", "it" => "Liberia"],
            ["code" => "LS", "en" => "Lesotho", "de" => "Lesotho", "es" => "Lesotho", "fr" => "Lesotho", "it" => "Lesotho"],
            ["code" => "LT", "en" => "Lithuania", "de" => "Litauen", "es" => "Lituania", "fr" => "Lituanie", "it" => "Lituania"],
            ["code" => "LU", "en" => "Luxembourg", "de" => "Luxemburg", "es" => "Luxemburgo", "fr" => "Luxembourg", "it" => "Lussemburgo"],
            ["code" => "LV", "en" => "Latvia", "de" => "Lettland", "es" => "Letonia", "fr" => "Lettonie", "it" => "Lettonia"],
            ["code" => "LY", "en" => "Libya", "de" => "Libyen", "es" => "Libia", "fr" => "Libye", "it" => "Libia"],
            ["code" => "MA", "en" => "Morocco", "de" => "Marokko", "es" => "Marruecos", "fr" => "Maroc", "it" => "Marocco"],
            ["code" => "MC", "en" => "Monaco", "de" => "Monaco", "es" => "Mónaco", "fr" => "Monaco", "it" => "Monaco"],
            ["code" => "MD", "en" => "Moldova", "de" => "Moldawien", "es" => "Moldova", "fr" => "Moldova", "it" => "Moldavia"],
            ["code" => "MG", "en" => "Madagascar", "de" => "Madagaskar", "es" => "Madagascar", "fr" => "Madagascar", "it" => "Madagascar"],
            ["code" => "MH", "en" => "Marshall Islands", "de" => "Marshallinseln", "es" => "Islas Marshall", "fr" => "Marshall, Îles", "it" => "Isole Marshall"],
            ["code" => "MK", "en" => "Macedonia", "de" => "Mazedonien", "es" => "Macedonia", "fr" => "Macédoine, L'ex-République Yougoslave De", "it" => "Macedonia"],
            ["code" => "ML", "en" => "Mali", "de" => "Mali", "es" => "Mali", "fr" => "Mali", "it" => "Mali"],
            ["code" => "MM", "en" => "Myanmar", "de" => "Myanmar (Burma)", "es" => "Myanmar", "fr" => "Myanmar", "it" => "Birmania"],
            ["code" => "MN", "en" => "Mongolia", "de" => "Mongolei", "es" => "Mongolia", "fr" => "Mongolie", "it" => "Mongolia"],
            ["code" => "MO", "en" => "Macao S.A.R., China", "de" => "Macau", "es" => "Macao", "fr" => "Macao", "it" => "Macao"],
            ["code" => "MP", "en" => "Northern Mariana Islands", "de" => "Nördliche Marianen", "es" => "Islas Marianas del Norte", "fr" => "Mariannes Du Nord, Îles", "it" => "Isole Marianne Settentrionali"],
            ["code" => "MQ", "en" => "Martinique", "de" => "Martinique", "es" => "Martinica", "fr" => "Martinique", "it" => "Martinica"],
            ["code" => "MR", "en" => "Mauritania", "de" => "Mauretanien", "es" => "Mauritania", "fr" => "Mauritanie", "it" => "Mauritania"],
            ["code" => "MS", "en" => "Montserrat", "de" => "Montserrat", "es" => "Montserrat", "fr" => "Montserrat", "it" => "Montserrat"],
            ["code" => "MT", "en" => "Malta", "de" => "Malta", "es" => "Malta", "fr" => "Malte", "it" => "Malta"],
            ["code" => "MU", "en" => "Mauritius", "de" => "Mauritius", "es" => "Mauricio", "fr" => "Maurice", "it" => "Mauritius"],
            ["code" => "MV", "en" => "Maldives", "de" => "Malediven", "es" => "Maldivas", "fr" => "Maldives", "it" => "Maldive"],
            ["code" => "MW", "en" => "Malawi", "de" => "Malawi", "es" => "Malawi", "fr" => "Malawi", "it" => "Malawi"],
            ["code" => "MX", "en" => "Mexico", "de" => "Mexiko", "es" => "México", "fr" => "Mexique", "it" => "Messico"],
            ["code" => "MY", "en" => "Malaysia", "de" => "Malaysia", "es" => "Malasia", "fr" => "Malaisie", "it" => "Malesia"],
            ["code" => "MZ", "en" => "Mozambique", "de" => "Mosambik", "es" => "Mozambique", "fr" => "Mozambique", "it" => "Mozambico"],
            ["code" => "NA", "en" => "Namibia", "de" => "Namibia", "es" => "Namibia", "fr" => "Namibie", "it" => "Namibia"],
            ["code" => "NC", "en" => "New Caledonia", "de" => "Neukaledonien", "es" => "Nueva Caledonia", "fr" => "Nouvelle-Calédonie", "it" => "Nuova Caledonia"],
            ["code" => "NE", "en" => "Niger", "de" => "Niger", "es" => "Níger", "fr" => "Niger", "it" => "Niger"],
            ["code" => "NF", "en" => "Norfolk Island", "de" => "Norfolkinsel", "es" => "Islas Norkfolk", "fr" => "Norfolk, Île", "it" => "Isola Norfolk"],
            ["code" => "NG", "en" => "Nigeria", "de" => "Nigeria", "es" => "Nigeria", "fr" => "Nigéria", "it" => "Nigeria"],
            ["code" => "NI", "en" => "Nicaragua", "de" => "Nicaragua", "es" => "Nicaragua", "fr" => "Nicaragua", "it" => "Nicaragua"],
            ["code" => "NL", "en" => "Netherlands", "de" => "Niederlande", "es" => "Países Bajos", "fr" => "Pays-Bas", "it" => "Paesi Bassi"],
            ["code" => "NO", "en" => "Norway", "de" => "Norwegen", "es" => "Noruega", "fr" => "Norvège", "it" => "Norvegia"],
            ["code" => "NP", "en" => "Nepal", "de" => "Nepal", "es" => "Nepal", "fr" => "Népal", "it" => "Nepal"],
            ["code" => "NR", "en" => "Nauru", "de" => "Nauru", "es" => "Nauru", "fr" => "Nauru", "it" => "Nauru"],
            ["code" => "NU", "en" => "Niue", "de" => "Niue", "es" => "Niue", "fr" => "Niué", "it" => "Niue"],
            ["code" => "NZ", "en" => "New Zealand", "de" => "Neuseeland", "es" => "Nueva Zelanda", "fr" => "Nouvelle-Zélande", "it" => "Nuova Zelanda"],
            ["code" => "OM", "en" => "Oman", "de" => "Oman", "es" => "Omán", "fr" => "Oman", "it" => "Oman"],
            ["code" => "PA", "en" => "Panama", "de" => "Panama", "es" => "Panamá", "fr" => "Panama", "it" => "Panamá"],
            ["code" => "PE", "en" => "Peru", "de" => "Peru", "es" => "Perú", "fr" => "Pérou", "it" => "Perù"],
            ["code" => "PF", "en" => "French Polynesia", "de" => "Französisch-Polynesien", "es" => "Polinesia Francesa", "fr" => "Polynésie Française", "it" => "Polinesia Francese"],
            ["code" => "PG", "en" => "Papua New Guinea", "de" => "Papua-Neuguinea", "es" => "Papúa Nueva Guinea", "fr" => "Papouasie-Nouvelle-Guinée", "it" => "Papua Nuova Guinea"],
            ["code" => "PH", "en" => "Philippines", "de" => "Philippinen", "es" => "Filipinas", "fr" => "Philippines", "it" => "Filippine"],
            ["code" => "PK", "en" => "Pakistan", "de" => "Pakistan", "es" => "Pakistán", "fr" => "Pakistan", "it" => "Pakistan"],
            ["code" => "PL", "en" => "Poland", "de" => "Polen", "es" => "Polonia", "fr" => "Pologne", "it" => "Polonia"],
            ["code" => "PM", "en" => "Saint Pierre and Miquelon", "de" => "St. Pierre und Miquelon", "es" => "San Pedro y Miquelón", "fr" => "Saint-Pierre-Et-Miquelon", "it" => "Saint-Pierre e Miquelon"],
            ["code" => "PN", "en" => "Pitcairn", "de" => "Pitcairninseln", "es" => "Islas Pitcairn", "fr" => "Pitcairn", "it" => "Isole Pitcairn"],
            ["code" => "PR", "en" => "Puerto Rico", "de" => "Puerto Rico", "es" => "Puerto Rico", "fr" => "Porto Rico", "it" => "Porto Rico"],
            ["code" => "PS", "en" => "Palestine", "de" => "Palästina", "es" => "Palestina", "fr" => "État De Palestine", "it" => "Palestina"],
            ["code" => "PT", "en" => "Portugal", "de" => "Portugal", "es" => "Portugal", "fr" => "Portugal", "it" => "Portogallo"],
            ["code" => "PW", "en" => "Palau", "de" => "Palau", "es" => "Islas Palaos", "fr" => "Palaos", "it" => "Palau"],
            ["code" => "PY", "en" => "Paraguay", "de" => "Paraguay", "es" => "Paraguay", "fr" => "Paraguay", "it" => "Paraguay"],
            ["code" => "QA", "en" => "Qatar", "de" => "Katar", "es" => "Qatar", "fr" => "Qatar", "it" => "Qatar"],
            ["code" => "RE", "en" => "Reunion", "de" => "Réunion", "es" => "Reunión", "fr" => "Réunion", "it" => "Riunione"],
            ["code" => "RO", "en" => "Romania", "de" => "Rumänien", "es" => "Rumanía", "fr" => "Roumanie", "it" => "Romania"],
            ["code" => "RU", "en" => "Russia", "de" => "Russische Föderation", "es" => "Rusia", "fr" => "Russie, Fédération De", "it" => "Russia"],
            ["code" => "RW", "en" => "Rwanda", "de" => "Ruanda", "es" => "Ruanda", "fr" => "Rwanda", "it" => "Ruanda"],
            ["code" => "SA", "en" => "Saudi Arabia", "de" => "Saudi-Arabien", "es" => "Arabia Saudita", "fr" => "Arabie Saoudite", "it" => "Arabia Saudita"],
            ["code" => "SB", "en" => "Solomon Islands", "de" => "Salomonen", "es" => "Islas Solomón", "fr" => "Salomon, Îles", "it" => "Isole Salomone"],
            ["code" => "SC", "en" => "Seychelles", "de" => "Seychellen", "es" => "Seychelles", "fr" => "Seychelles", "it" => "Seychelles"],
            ["code" => "SD", "en" => "Sudan", "de" => "Sudan", "es" => "Sudán", "fr" => "Soudan", "it" => "Sudan"],
            ["code" => "SE", "en" => "Sweden", "de" => "Schweden", "es" => "Suecia", "fr" => "Suède", "it" => "Svezia"],
            ["code" => "SG", "en" => "Singapore", "de" => "Singapur", "es" => "Singapur", "fr" => "Singapour", "it" => "Singapore"],
            ["code" => "SH", "en" => "Saint Helena", "de" => "St. Helena", "es" => "Santa Elena", "fr" => "Sainte-Hélène, Ascension Et Tristan Da Cunha", "it" => "Sant'Elena, Ascensione e Tristan da Cunha"],
            ["code" => "SI", "en" => "Slovenia", "de" => "Slowenien", "es" => "Eslovenia", "fr" => "Slovénie", "it" => "Slovenia Slovenia"],
            ["code" => "SJ", "en" => "Svalbard and Jan Mayen", "de" => "Svalbard und Jan Mayen", "es" => "Islas Svalbard y Jan Mayen", "fr" => "Svalbard Et Île Jan Mayen", "it" => "Svalbard e Jan Mayen"],
            ["code" => "SK", "en" => "Slovakia", "de" => "Slowakei", "es" => "Eslovaquia", "fr" => "Slovaquie", "it" => "Slovacchia"],
            ["code" => "SL", "en" => "Sierra Leone", "de" => "Sierra Leone", "es" => "Sierra Leona", "fr" => "Sierra Leone", "it" => "Sierra Leone"],
            ["code" => "SM", "en" => "San Marino", "de" => "San Marino", "es" => "San Marino", "fr" => "Saint-Marin", "it" => "San Marino"],
            ["code" => "SN", "en" => "Senegal", "de" => "Senegal", "es" => "Senegal", "fr" => "Sénégal", "it" => "Senegal"],
            ["code" => "SO", "en" => "Somalia", "de" => "Somalia", "es" => "Somalia", "fr" => "Somalie", "it" => "Somalia"],
            ["code" => "SR", "en" => "Suriname", "de" => "Suriname", "es" => "Surinam", "fr" => "Suriname", "it" => "Suriname"],
            ["code" => "ST", "en" => "Sao Tome and Principe", "de" => "São Tomé und Príncipe", "es" => "Santo Tomé y Príncipe", "fr" => "Sao Tomé-Et-Principe", "it" => "São Tomé e Príncipe"],
            ["code" => "SV", "en" => "El Salvador", "de" => "El Salvador", "es" => "El Salvador", "fr" => "El Salvador", "it" => "El Salvador"],
            ["code" => "SY", "en" => "Syria", "de" => "Syrien", "es" => "Siria", "fr" => "Syrienne, République Arabe", "it" => "Siria"],
            ["code" => "SZ", "en" => "Swaziland", "de" => "Swasiland", "es" => "Suazilandia", "fr" => "Swaziland", "it" => "Swaziland"],
            ["code" => "TC", "en" => "Turks and Caicos Islands", "de" => "Turks- und Caicosinseln", "es" => "Islas Turcas y Caicos", "fr" => "Turks Et Caïques, Îles", "it" => "Turks e Caicos"],
            ["code" => "TD", "en" => "Chad", "de" => "Tschad", "es" => "Chad", "fr" => "Tchad", "it" => "Ciad"],
            ["code" => "TF", "en" => "French Southern Territories", "de" => "Französische Süd- und Antarktisgebiete", "es" => "Territorios Australes Franceses", "fr" => "Terres Australes Françaises", "it" => "Terre australi e antartiche francesi"],
            ["code" => "TG", "en" => "Togo", "de" => "Togo", "es" => "Togo", "fr" => "Togo", "it" => "Togo"],
            ["code" => "TH", "en" => "Thailand", "de" => "Thailand", "es" => "Tailandia", "fr" => "Thaïlande", "it" => "Thailandia"],
            ["code" => "TJ", "en" => "Tajikistan", "de" => "Tadschikistan", "es" => "Tayikistán", "fr" => "Tadjikistan", "it" => "Tagikistan"],
            ["code" => "TK", "en" => "Tokelau", "de" => "Tokelau", "es" => "Tokelau", "fr" => "Tokelau", "it" => "Tokelau"],
            ["code" => "TL", "en" => "East Timor", "de" => "Timor-Leste", "es" => "Timor-Leste", "fr" => "Timor-Leste", "it" => "Timor Est"],
            ["code" => "TM", "en" => "Turkmenistan", "de" => "Turkmenistan", "es" => "Turkmenistán", "fr" => "Turkménistan", "it" => "Turkmenistan"],
            ["code" => "TN", "en" => "Tunisia", "de" => "Tunesien", "es" => "Túnez", "fr" => "Tunisie", "it" => "Tunisia"],
            ["code" => "TO", "en" => "Tonga", "de" => "Tonga", "es" => "Tonga", "fr" => "Tonga", "it" => "Tonga"],
            ["code" => "TR", "en" => "Turkey", "de" => "Türkei", "es" => "Turquía", "fr" => "Turquie", "it" => "Turchia"],
            ["code" => "TT", "en" => "Trinidad and Tobago", "de" => "Trinidad und Tobago", "es" => "Trinidad y Tobago", "fr" => "Trinité-Et-Tobago", "it" => "Trinidad e Tobago"],
            ["code" => "TV", "en" => "Tuvalu", "de" => "Tuvalu", "es" => "Tuvalu", "fr" => "Tuvalu", "it" => "Tuvalu"],
            ["code" => "TW", "en" => "Taiwan", "de" => "Taiwan", "es" => "Taiwán", "fr" => "Taïwan, Province De Chine", "it" => "Taiwan"],
            ["code" => "TZ", "en" => "Tanzania", "de" => "Tansania", "es" => "Tanzania", "fr" => "Tanzanie, République Unie De", "it" => "Tanzania"],
            ["code" => "UA", "en" => "Ukraine", "de" => "Ukraine", "es" => "Ucrania", "fr" => "Ukraine", "it" => "Ucraina"],
            ["code" => "UG", "en" => "Uganda", "de" => "Uganda", "es" => "Uganda", "fr" => "Ouganda", "it" => "Uganda"],
            ["code" => "UM", "en" => "United States Minor Outlying Islands", "de" => "Amerikanisch-Ozeanien", "es" => "Islas menores periféricas de los Estados Unidos", "fr" => "Îles Mineures Éloignées Des États-Unis", "it" => "Isole minori esterne degli Stati Uniti"],
            ["code" => "US", "en" => "United States", "de" => "Vereinigte Staaten von Amerika", "es" => "Estados Unidos de América", "fr" => "États-Unis", "it" => "Stati Uniti"],
            ["code" => "UY", "en" => "Uruguay", "de" => "Uruguay", "es" => "Uruguay", "fr" => "Uruguay", "it" => "Uruguay"],
            ["code" => "UZ", "en" => "Uzbekistan", "de" => "Usbekistan", "es" => "Uzbekistán", "fr" => "Ouzbékistan", "it" => "Uzbekistan"],
            ["code" => "VA", "en" => "Vatican", "de" => "Vatikanstadt", "es" => "Ciudad del Vaticano", "fr" => "Saint-Siège (État De La Cité Du Vatican)", "it" => "Città del Vaticano"],
            ["code" => "VC", "en" => "Saint Vincent and the Grenadines", "de" => "St. Vincent und die Grenadinen", "es" => "San Vicente y las Granadinas", "fr" => "Saint-Vincent-Et-Les-Grenadines", "it" => "Saint Vincent e Grenadine"],
            ["code" => "VE", "en" => "Venezuela", "de" => "Venezuela", "es" => "Venezuela", "fr" => "Venezuela, République Bolivarienne Du", "it" => "Venezuela"],
            ["code" => "VG", "en" => "British Virgin Islands", "de" => "Britische Jungferninseln", "es" => "Islas Vírgenes Británicas", "fr" => "Îles Vierges Britanniques", "it" => "Isole Vergini britanniche"],
            ["code" => "VI", "en" => "U.S. Virgin Islands", "de" => "Amerikanische Jungferninseln", "es" => "Islas Vírgenes de los Estados Unidos de América", "fr" => "Îles Vierges Des États-Unis", "it" => "Isole Vergini americane"],
            ["code" => "VN", "en" => "Vietnam", "de" => "Vietnam", "es" => "Vietnam", "fr" => "Viet Nam", "it" => "Vietnam"],
            ["code" => "VU", "en" => "Vanuatu", "de" => "Vanuatu", "es" => "Vanuatu", "fr" => "Vanuatu", "it" => "Vanuatu"],
            ["code" => "WF", "en" => "Wallis and Futuna", "de" => "Wallis und Futuna", "es" => "Wallis y Futuna", "fr" => "Wallis-Et-Futuna", "it" => "Wallis e Futuna"],
            ["code" => "WS", "en" => "Samoa", "de" => "Samoa", "es" => "Samoa", "fr" => "Samoa", "it" => "Samoa"],
            ["code" => "YE", "en" => "Yemen", "de" => "Jemen", "es" => "Yemen", "fr" => "Yémen", "it" => "Yemen"],
            ["code" => "YT", "en" => "Mayotte", "de" => "Mayotte", "es" => "Mayotte", "fr" => "Mayotte", "it" => "Mayotte"],
            ["code" => "ZA", "en" => "South Africa", "de" => "Südafrika", "es" => "Sudáfrica", "fr" => "Afrique Du Sud", "it" => "Sudafrica"],
            ["code" => "ZM", "en" => "Zambia", "de" => "Sambia", "es" => "Zambia", "fr" => "Zambie", "it" => "Zambia"],
            ["code" => "ZW", "en" => "Zimbabwe", "de" => "Simbabwe", "es" => "Zimbabue", "fr" => "Zimbabwe", "it" => "Zimbabwe"],
            ["code" => "RS", "en" => "Serbia", "de" => "Serbien", "es" => "Serbia", "fr" => "Serbie", "it" => "Serbia"],
            ["code" => "ME", "en" => "Montenegro", "de" => "Montenegro", "es" => "Montenegro", "fr" => "Monténégro", "it" => "Montenegro"],
            ["code" => "BL", "en" => "Saint Barthelemy !Saint Barthélemy", "de" => "Saint-Barthélemy", "es" => "Saint Barthélemy", "fr" => "Saint-Barthélemy", "it" => "Saint-Barthélemy"],
            ["code" => "BQ", "en" => "Bonaire, Sint Eustatius and Saba", "de" => "Bonaire, Sint Eustatius und Saba", "es" => "Bonaire, San Eustaquio y Saba", "fr" => "Bonaire, Saint-Eustache Et Saba", "it" => "Isole BES"],
            ["code" => "CW", "en" => "Curacao !Curaçao", "de" => "Curaçao", "es" => "Curaçao", "fr" => "Curaçao", "it" => "Curaçao"],
            ["code" => "MF", "en" => "Saint Martin (French part)", "de" => "Saint-Martin (franz. Teil)", "es" => "Saint Martin (parte francesa)", "fr" => "Saint-Martin (Partie Française)", "it" => "Saint-Martin"],
            ["code" => "SX", "en" => "Sint Maarten (Dutch part)", "de" => "Sint Maarten (niederl. Teil)", "es" => "Sint Maarten (parte neerlandesa)", "fr" => "Saint-Martin (Partie Néerlandaise)", "it" => "Sint Maarten"],
            ["code" => "SS", "en" => "South Sudan", "de" => "Sudsudan!Südsudan", "es" => "Sudán del Sur", "fr" => "Soudan Du Sud", "it" => "Sudan del Sud"],
        ];

        foreach($countries as $country) {
            $newCountry = new Country(
                $country
            );
            $newCountry->save();
        }
    }
}
