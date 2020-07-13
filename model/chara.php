<?php
require_once('model.php');

/**
 * Charaモデル
 *
 * @version 1.0.0
 * @author  M.Katsube <katsubemakito@gmail.com>
 */
class CharaModel extends Model{
  protected $tableName = 'Chara';  // 対象テーブル
  
  function getCharaDatas($chara_ids = []){
    $ids = implode(",", $chara_ids);
    $sql  = sprintf('SELECT * FROM %s WHERE id in (%s)', $this->tableName, $ids);

    $this->query($sql);
    $buff = $this->fetch();
    
    if( $buff !== false ){
      return($buff);
    }
    else{
      return(false);
    }
  }
}
