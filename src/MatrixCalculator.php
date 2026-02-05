<?php

declare(strict_types=1);

namespace DestinyMatrix\Calculator;

use DateTimeInterface;
use InvalidArgumentException;

final class MatrixCalculator
{
  public static function fromDateString(string|DateTimeInterface $date): PointsResult
  {
    if ($date instanceof DateTimeInterface) {
      return self::fromParts(
        (int) $date->format('d'),
        (int) $date->format('m'),
        (int) $date->format('Y')
      );
    }

    $date = trim($date);
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
      throw new InvalidArgumentException('Date string must be in YYYY-MM-DD format.');
    }

    [$year, $month, $day] = array_map('intval', explode('-', $date));

    return self::fromParts($day, $month, $year);
  }

  public static function fromParts(int $day, int $month, int $year): PointsResult
  {
    if (!checkdate($month, $day, $year)) {
      throw new InvalidArgumentException('Invalid date.');
    }

    $apoint = self::reduceNumber($day);
    $bpoint = $month;
    $cpoint = self::calculateYear($year);

    return self::calculatePoints($apoint, $bpoint, $cpoint);
  }

  private static function reduceNumber(int $number): int
  {
    if ($number > 22) {
      return ($number % 10) + intdiv($number, 10);
    }

    return $number;
  }

  private static function calculateYear(int $year): int
  {
    $sum = 0;
    while ($year > 0) {
      $sum += $year % 10;
      $year = intdiv($year, 10);
    }

    return self::reduceNumber($sum);
  }

  private static function calculatePoints(int $aPoint, int $bPoint, int $cPoint): PointsResult
  {
    $dpoint = self::reduceNumber($aPoint + $bPoint + $cPoint);
    $epoint = self::reduceNumber($aPoint + $bPoint + $cPoint + $dpoint);
    $fpoint = self::reduceNumber($aPoint + $bPoint);
    $gpoint = self::reduceNumber($bPoint + $cPoint);
    $hpoint = self::reduceNumber($dpoint + $aPoint);
    $ipoint = self::reduceNumber($cPoint + $dpoint);
    $jpoint = self::reduceNumber($dpoint + $epoint);

    $npoint = self::reduceNumber($cPoint + $epoint);
    $lpoint = self::reduceNumber($jpoint + $npoint);
    $mpoint = self::reduceNumber($lpoint + $npoint);
    $kpoint = self::reduceNumber($jpoint + $lpoint);

    $qpoint = self::reduceNumber($npoint + $cPoint);
    $rpoint = self::reduceNumber($jpoint + $dpoint);
    $spoint = self::reduceNumber($aPoint + $epoint);
    $tpoint = self::reduceNumber($bPoint + $epoint);

    $opoint = self::reduceNumber($aPoint + $spoint);
    $ppoint = self::reduceNumber($bPoint + $tpoint);

    $upoint = self::reduceNumber($fpoint + $gpoint + $hpoint + $ipoint);
    $vpoint = self::reduceNumber($epoint + $upoint);
    $wpoint = self::reduceNumber($spoint + $epoint);
    $xpoint = self::reduceNumber($tpoint + $epoint);

    $f2point = self::reduceNumber($fpoint + $upoint);
    $f1point = self::reduceNumber($fpoint + $f2point);
    $g2point = self::reduceNumber($gpoint + $upoint);
    $g1point = self::reduceNumber($gpoint + $g2point);
    $i2point = self::reduceNumber($ipoint + $upoint);
    $i1point = self::reduceNumber($ipoint + $i2point);
    $h2point = self::reduceNumber($hpoint + $upoint);
    $h1point = self::reduceNumber($hpoint + $h2point);

    return new PointsResult(
      $aPoint,
      $bPoint,
      $cPoint,
      $dpoint,
      $epoint,
      $fpoint,
      $gpoint,
      $hpoint,
      $ipoint,
      $jpoint,
      $kpoint,
      $lpoint,
      $mpoint,
      $npoint,
      $opoint,
      $ppoint,
      $qpoint,
      $rpoint,
      $spoint,
      $tpoint,
      $upoint,
      $vpoint,
      $wpoint,
      $xpoint,
      $f2point,
      $f1point,
      $g2point,
      $g1point,
      $i2point,
      $i1point,
      $h2point,
      $h1point
    );
  }
}
