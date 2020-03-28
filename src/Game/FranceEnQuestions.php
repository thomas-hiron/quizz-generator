<?php

namespace App\Game;

class FranceEnQuestions extends AbstractGame
{
    private const ALSACE = "Alsace";
    private const AQUITAINE = "Aquitaine";
    private const AUVERGNE = "Auvergne";
    private const BASSE_NORMANDIE = "Basse Normandie";
    private const BOURGOGNE = "Bourgogne";
    private const BRETAGNE = "Bretagne";
    private const CENTRE = "Centre";
    private const CHAMPAGNE_ARDENNE = "Champagne Ardenne";
    private const CORSE = "Corse";
    private const FRANCHE_COMTE = "Franche-Comté";
    private const HAUTE_NORMANDIE = "Haute Normandie";
    private const ILE_DE_FRANCE = "Île de France";
    private const LANGUEDOC_ROUSSILLON = "Languedoc Roussillon";
    private const LIMOUSIN = "Limousin";
    private const LORRAINE = "Lorraine";
    private const MIDI_PYRENEES = "Midi Pyrénées";
    private const NORD_PAS_DE_CALAIS = "Nord Pas de Calais";
    private const PAYS_DE_LOIRE = "Pays de Loire";
    private const PICARDIE = "Picardie";
    private const POITOU_CHARENTES = "Poitou Charentes";
    private const PROVENCE_ALPES_COTE_DAZUR = "Provence Alpes Côte d'Azur";
    private const RHONE_ALPES = "Rhône Alpes";

    public static function getAvailableQuestions(): array
    {
        return [
            self::ALSACE,
            self::AQUITAINE,
            self::AUVERGNE,
            self::BASSE_NORMANDIE,
            self::BOURGOGNE,
            self::BRETAGNE,
            self::CENTRE,
            self::CHAMPAGNE_ARDENNE,
            self::CORSE,
            self::FRANCHE_COMTE,
            self::HAUTE_NORMANDIE,
            self::ILE_DE_FRANCE,
            self::LANGUEDOC_ROUSSILLON,
            self::LIMOUSIN,
            self::LORRAINE,
            self::MIDI_PYRENEES,
            self::NORD_PAS_DE_CALAIS,
            self::PAYS_DE_LOIRE,
            self::PICARDIE,
            self::POITOU_CHARENTES,
            self::PROVENCE_ALPES_COTE_DAZUR,
            self::RHONE_ALPES,
        ];
    }

    public function getName(): string
    {
        return 'France en 2000 questions';
    }
}
