<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2020 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */ 
 
declare(strict_types=1);

namespace SirPeter\WebtreesModules\History\HistoricEvents_Germany;

use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsInterface;
use Illuminate\Support\Collection;

/** 
 * Historic Events: Germany
 * Historische Ereignisse: Deutschland
 */
return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface {
    use ModuleCustomTrait;
    use ModuleHistoricEventsTrait;

    public const CUSTOM_TITLE = 'Historic Events: Germany 🇩🇪';

    public const CUSTOM_AUTHOR = 'Sir Peter';
    
    public const CUSTOM_WEBSITE = 'https://github.com/reteP-riS/webtrees-HistoricEvents-Germany';
    
    public const CUSTOM_VERSION = '1.0.0.0';

    public const CUSTOM_LAST = 'https://github.com/reteP-riS/webtrees-HistoricEvents-Germany/blob/main/latest-version.txt';

    /**
     * Constructor.  The constructor is called on *all* modules, even ones that are disabled.
     * This is a good place to load business logic ("services").  Type-hint the parameters and
     * they will be injected automatically.
     */
    public function __construct()
    {
        // NOTE:  If your module is dependent on any of the business logic ("services"),
        // then you would type-hint them in the constructor and let webtrees inject them
        // for you.  However, we can't use dependency injection on anonymous classes like
        // this one. For an example of this, see the example-server-configuration module.
    }

    /**
     * Bootstrap.  This function is called on *enabled* modules.
     * It is a good place to register routes and views.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return self::CUSTOM_TITLE;
    }

    /**
     * A sentence describing what this module does.
     *
     * @return string
     */
    public function description(): string
    {
        return I18N::translate('Historic Events: Germany');
    }

    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string
    {
        return self::CUSTOM_AUTHOR;
    }

    /**
     * The version of this module.
     *
     * @return string
     */
    public function customModuleVersion(): string
    {
        return self::CUSTOM_VERSION;
    }

    /**
     * A URL that will provide the latest version of this module.
     *
     * @return string
     */
        public function customModuleLatestVersionUrl(): string
    {
        return self::CUSTOM_LAST;
    }

    /**
     * Where to get support for this module.  Perhaps a github respository?
     *
     * @return string
     */
    public function customModuleSupportUrl(): string
    {
        return self::CUSTOM_WEBSITE;
    }

    /**
     * Should this module be enabled when it is first installed?
     *
     * @return bool
     */
    public function isEnabledByDefault(): bool
    {
        return false;
    }

    /**
     * Where does this module store its resources
     *
     * @return string
     */
    public function resourcesFolder(): string
    {
        return __DIR__ . '/resources/';
    }
    
    /**
     * Additional/updated translations.
     *
     * @param string $language
     *
     * @return string[]
     */
    
    public function customTranslations(string $language): array
    {
        switch ($language) {
            case 'de':
                // Arrays are preferred, and faster.
                // If your module uses .MO files, then you can convert them to arrays like this.
                return (new Translation(__DIR__ . '/resources/language/de.mo'))->asArray();
            case 'de-DE':
                // Arrays are preferred, and faster.
                // If your module uses .MO files, then you can convert them to arrays like this.
                return (new Translation(__DIR__ . '/resources/language/de_DE.mo'))->asArray();
    
            default:
                return [];
        }
    }

    /**
     * All events provided by this module.
     * 
     * Each line is a GEDCOM style record to describe an event (EVEN), including newline chars (\n)
     *      1 EVEN <title>
     *      2 TYPE <short category name>
     *      2 DATE <date or date period>
     *      2 NOTE <comment or [wikipedia.de](<link>)>
     *      2 SOUR <source>
     *
     * @return Collection<string>
     */
    
    public function historicEventsAll(): Collection
    {
        $eventType = I18N::translate('Historic event');
        
        return new Collection([
"1 EVEN Beginn des Deutschen Kaiserreichs\n2 TYPE ".$eventType."\n2 DATE 01 JAN 1871\n2 NOTE Wilhelm I. (* 22. März 1797 als Wilhelm Friedrich Ludwig von Preußen in Berlin; † 9. März 1888 ebenda) aus dem Haus Hohenzollern war ab 1871 der erste Deutsche Kaiser. Wilhelm war in Preußen unter dem Namen Prinz von Preußen im Jahr 1840 Thronfolger und 1858 Regent geworden. Ab 1861 König von Preußen, wurde er 1867 Präsident des Norddeutschen Bundes, aus dem 1871 das Deutsche Kaiserreich hervorging.\n2 SOUR https://de.wikipedia.org/wiki/Deutsches_Kaiserreich und https://de.wikipedia.org/wiki/Wilhelm_I._(Deutsches_Reich)",
"1 EVEN Ende des Deutschen Kaiserreichs\n2 TYPE ".$eventType."\n2 DATE 01 DEC 1918\n2 NOTE Wilhelm II. (* 27. Januar 1859 als Friedrich Wilhelm Viktor Albert von Preußen in Berlin; † 4. Juni 1941 in Doorn, Niederlande) aus dem Haus Hohenzollern, war von 1888 bis 1918 letzter Deutscher Kaiser und König von Preußen. Wilhelm war ein Enkel Kaiser Wilhelms I. und ein Sohn Kaiser Friedrichs III. Friedrich III. regierte nur 99 Tage, sodass im \"Dreikaiserjahr\" 1888 auf einen 90-jährigen und einen 56-jährigen Herrscher der 29-jährige Wilhelm II. folgte. Aus Furcht vor der einsetzenden Novemberrevolution verkündete Reichskanzler Prinz Max von Baden am 9. November 1918 verfrüht und über das Ziel hinaus schiessend die Abdankung des Kaisers und gleichzeitig des Kronprinzen Wilhelm von Preußen. Wilhelm II. begab sich am 10. November 1918 in die Niederlande ins Exil und unterschrieb am 28. November 1918 die Erklärung seiner Abdankung, der Kronprinz folgte am 1. Dezember mit einer eigenen Erklärung. Damit war die Monarchie auch formell beendet.\n2 SOUR https://de.wikipedia.org/wiki/Deutsches_Kaiserreich und https://de.wikipedia.org/wiki/Wilhelm_II._(Deutsches_Reich) sowie https://de.wikipedia.org/wiki/Friedrich_III._(Deutsches_Reich)",
"1 EVEN Beginn des Ersten Weltkriegs\n2 TYPE ".$eventType."\n2 DATE 28 JUL 1914\n2 NOTE Beginn des Ersten Weltkriegs durch die Kriegserklärung Österreich-Ungarns an Serbien.\n2 SOUR https://de.wikipedia.org/wiki/Erster_Weltkrieg",
"1 EVEN Ende des Ersten Weltkriegs\n2 TYPE ".$eventType."\n2 DATE 11 NOV 1918\n2 NOTE Ende des Ersten Weltkriegs durch den Waffenstillstand von Compiègne.\n2 SOUR https://de.wikipedia.org/wiki/Waffenstillstand_von_Compiègne_(1918)",
"1 EVEN Machtergreifung durch Adolf Hitler\n2 TYPE ".$eventType."\n2 DATE 30 JAN 1933\n2 NOTE Ernennung Adolf Hitlers zum Reichskanzler durch den Reichspräsidenten Paul von Hindenburg.\n2 SOUR https://de.wikipedia.org/wiki/Machtergreifung",
"1 EVEN Verordnung des Reichspräsidenten zum Schutze des Deutschen Volkes\n2 TYPE ".$eventType."\n2 DATE 04 FEB 1933\n2 NOTE Einschränkung der Versammlungs- und Pressefreiheit.\n2 SOUR https://de.wikipedia.org/wiki/Verordnung_des_Reichspräsidenten_zum_Schutze_des_Deutschen_Volkes",
"1 EVEN Reichstagsbrand\n2 TYPE ".$eventType."\n2 DATE 27 FEB 1933\n2 NOTE Der durch Brandstiftung verursachte Brand des Berliner Reichstagsgebäudes kam - unabhängig von der wahren Täterschaft - den Nationalsozialisten in ihrem Wahlkampf gegen die Kommunisten und Sozialisten äußerst gelegen. Als Einzeltäter wurde später der geständige, politisch links orientierte niederländische Arbeiter Marinus van der Lubbe verurteilt und hingerichtet.\n2 SOUR https://de.wikipedia.org/wiki/Reichstagsbrand und https://de.wikipedia.org/wiki/Marinus_van_der_Lubbe",
"1 EVEN Verordnung des Reichspräsidenten zum Schutz von Volk und Staat\n2 TYPE ".$eventType."\n2 DATE 28 FEB 1933\n2 NOTE Die \"Reichstagsbrandverordnung\" setzte die Bürgerrechte der Weimarer Verfassung außer Kraft.\n2 SOUR https://de.wikipedia.org/wiki/Verordnung_des_Reichspräsidenten_zum_Schutz_von_Volk_und_Staat",
"1 EVEN Gesetz zur Behebung der Not von Volk und Reich\n2 TYPE ".$eventType."\n2 DATE 24 MAR 1933\n2 NOTE Das \"Ermächtigungsgesetz\" ermächtigte die Reichsregierung (Exekutive) auch zur Verabschiedung von Gesetzen und übertrug damit die gesetzgebende Gewalt (Legislative) faktisch vollständig an Adolf Hitler.\n2 SOUR https://de.wikipedia.org/wiki/Ermächtigungsgesetz_vom_24._März_1933",
"1 EVEN Beginn des Zweiten Weltkriegs\n2 TYPE ".$eventType."\n2 DATE 01 SEP 1939\n2 NOTE Beginn des Zweiten Weltkriegs durch den deutschen Überfall auf Polen.\n2 SOUR https://de.wikipedia.org/wiki/Überfall_auf_Polen",
"1 EVEN D-Day\n2 TYPE ".$eventType."\n2 DATE 06 JUN 1944\n2 NOTE Beginn der Landung der Alliierten in der Normandie im Zweiten Weltkrieg. Der D-Day war der Beginn der Operation Overlord, die Landung selbst verlief unter dem Codenamen Operation Neptune.\n2 SOUR https://de.wikipedia.org/wiki/Operation_Overlord und https://de.wikipedia.org/wiki/Operation_Neptune",
"1 EVEN Ende des Zweiten Weltkriegs\n2 TYPE ".$eventType."\n2 DATE 08 MAY 1945\n2 NOTE Symbolischer \"Tag der Befreiung\" und Ende des Zweiten Weltkriegs in Europa durch die bedingungslose Kapitulation der Wehrmacht.\n2 SOUR https://de.wikipedia.org/wiki/Tag_der_Befreiung",
"1 EVEN Beginn der Bundesrepublik Deutschland\n2 TYPE ".$eventType."\n2 DATE 24 May 1949\n2 NOTE Mit der Entstehung der Bundesrepublik Deutschland trat am 24. Mai 1949 auch das Deutsche Grundgesetz in Kraft.\n2 SOUR https://de.wikipedia.org/wiki/Geschichte_der_Bundesrepublik_Deutschland_(bis_1990)#Gründung_der_Bundesrepublik_Deutschland_1949",
"1 EVEN Beginn der Deutschen Demokratischen Republik\n2 TYPE ".$eventType."\n2 DATE 07 Oct 1949\n2 NOTE Mit der Entstehung der Deutschen Demokratischen Republik trat am 7. Oktober 1949 auch die 1. Verfassung der DDR in Kraft.\n2 SOUR https://de.wikipedia.org/wiki/Deutsche_Demokratische_Republik#Gründung_der_DDR_und_Aufbau_des_Sozialismus_(1949–1961)",
"1 EVEN Bau der Berliner Mauer\n2 TYPE ".$eventType."\n2 DATE 13 AUG 1961\n2 NOTE Symbolischer \"Tag des Mauerbaus\".\n2 SOUR https://de.wikipedia.org/wiki/Berliner_Mauer",
"1 EVEN Fall der Berliner Mauer\n2 TYPE ".$eventType."\n2 DATE 09 NOV 1989\n2 NOTE Symbolischer \"Tag des Mauerfalls\".\n2 SOUR https://de.wikipedia.org/wiki/Berliner_Mauer#Mauerfall",
"1 EVEN Ende der Deutschen Demokratischen Republik\n2 TYPE ".$eventType."\n2 DATE 03 Oct 1990\n2 NOTE Mit ihrer Auflösung trat die Deutsche Demokratische Republik im Rahmen der \"Wiedervereinigung\" der Bundesrepublik Deutschland bei.\n2 SOUR https://de.wikipedia.org/wiki/Deutsche_Demokratische_Republik#Niedergang_und_Wende_(1981–1990)",
        ]);
    }
    
};

    /**
     * Umlaute, etc.:
     * 
     * &auml; ä Ã¤
     * &ouml; ö Ã¶
     * &uuml; ü Ã¼
     * &Auml; Ä Ã„
     * &Ouml; Ö Ã–
     * &Uuml; Ü Ãœ
     * &szlig; ß ÃŸ
     * &dagger; † 
     * 
     */
