<?php

declare(strict_types=1);

namespace DestinyMatrix\Calculator;

final class PointsResult
{
  public readonly int $apoint;
  public readonly int $bpoint;
  public readonly int $cpoint;
  public readonly int $dpoint;
  public readonly int $epoint;
  public readonly int $fpoint;
  public readonly int $gpoint;
  public readonly int $hpoint;
  public readonly int $ipoint;
  public readonly int $jpoint;
  public readonly int $kpoint;
  public readonly int $lpoint;
  public readonly int $mpoint;
  public readonly int $npoint;
  public readonly int $opoint;
  public readonly int $ppoint;
  public readonly int $qpoint;
  public readonly int $rpoint;
  public readonly int $spoint;
  public readonly int $tpoint;
  public readonly int $upoint;
  public readonly int $vpoint;
  public readonly int $wpoint;
  public readonly int $xpoint;
  public readonly int $f2point;
  public readonly int $f1point;
  public readonly int $g2point;
  public readonly int $g1point;
  public readonly int $i2point;
  public readonly int $i1point;
  public readonly int $h2point;
  public readonly int $h1point;

  public function __construct(
    int $apoint,
    int $bpoint,
    int $cpoint,
    int $dpoint,
    int $epoint,
    int $fpoint,
    int $gpoint,
    int $hpoint,
    int $ipoint,
    int $jpoint,
    int $kpoint,
    int $lpoint,
    int $mpoint,
    int $npoint,
    int $opoint,
    int $ppoint,
    int $qpoint,
    int $rpoint,
    int $spoint,
    int $tpoint,
    int $upoint,
    int $vpoint,
    int $wpoint,
    int $xpoint,
    int $f2point,
    int $f1point,
    int $g2point,
    int $g1point,
    int $i2point,
    int $i1point,
    int $h2point,
    int $h1point
  ) {
    $this->apoint = $apoint;
    $this->bpoint = $bpoint;
    $this->cpoint = $cpoint;
    $this->dpoint = $dpoint;
    $this->epoint = $epoint;
    $this->fpoint = $fpoint;
    $this->gpoint = $gpoint;
    $this->hpoint = $hpoint;
    $this->ipoint = $ipoint;
    $this->jpoint = $jpoint;
    $this->kpoint = $kpoint;
    $this->lpoint = $lpoint;
    $this->mpoint = $mpoint;
    $this->npoint = $npoint;
    $this->opoint = $opoint;
    $this->ppoint = $ppoint;
    $this->qpoint = $qpoint;
    $this->rpoint = $rpoint;
    $this->spoint = $spoint;
    $this->tpoint = $tpoint;
    $this->upoint = $upoint;
    $this->vpoint = $vpoint;
    $this->wpoint = $wpoint;
    $this->xpoint = $xpoint;
    $this->f2point = $f2point;
    $this->f1point = $f1point;
    $this->g2point = $g2point;
    $this->g1point = $g1point;
    $this->i2point = $i2point;
    $this->i1point = $i1point;
    $this->h2point = $h2point;
    $this->h1point = $h1point;
  }

  public function toArray(): array
  {
    return [
      'apoint' => $this->apoint,
      'bpoint' => $this->bpoint,
      'cpoint' => $this->cpoint,
      'dpoint' => $this->dpoint,
      'epoint' => $this->epoint,
      'fpoint' => $this->fpoint,
      'gpoint' => $this->gpoint,
      'hpoint' => $this->hpoint,
      'ipoint' => $this->ipoint,
      'jpoint' => $this->jpoint,
      'kpoint' => $this->kpoint,
      'lpoint' => $this->lpoint,
      'mpoint' => $this->mpoint,
      'npoint' => $this->npoint,
      'opoint' => $this->opoint,
      'ppoint' => $this->ppoint,
      'qpoint' => $this->qpoint,
      'rpoint' => $this->rpoint,
      'spoint' => $this->spoint,
      'tpoint' => $this->tpoint,
      'upoint' => $this->upoint,
      'vpoint' => $this->vpoint,
      'wpoint' => $this->wpoint,
      'xpoint' => $this->xpoint,
      'f2point' => $this->f2point,
      'f1point' => $this->f1point,
      'g2point' => $this->g2point,
      'g1point' => $this->g1point,
      'i2point' => $this->i2point,
      'i1point' => $this->i1point,
      'h2point' => $this->h2point,
      'h1point' => $this->h1point
    ];
  }
}
