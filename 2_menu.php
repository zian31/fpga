<?php
if (!($view2==1 or $file>=$middle or $mfile>=$middle or $file2>=$middle))
{
?>

      <table width=210 align=center cellpadding=2 cellspacing=0 border=0 bgcolor=0A559F>
        <tr>
          <td>
           <table width=100% valign=center align=center cellpadding=0 cellspacing=10 border=0 bgcolor=FFFFFF>

<?php
/*
              <tr>
                <td height=10>
                </td>
              </tr>
*/
                echo "              <tr height=15>";
                echo "                <td width=25 align=right>";
                echo "                <A HREF=\"index.php?view2=1\"><IMG SRC=\"images/down3.gif\" border=0></A>";
                echo "                </td>";
                echo "                <td width=170 align=left>";
                echo "                </td>";
                echo "              </tr>";

                $i=0;
                  while ($i<$middle)
                  {
                  echo "              <tr height=15>\r\n";
                  echo "                <td width=25 align=right>\r\n";
                  echo "                <A HREF=\"index.php?mfile=".$i."\"><img src=\"images/up.gif\" border=0></A>\r\n";
                  echo "                </td>\r\n";
                  echo "                <td width=170 align=left>\r\n";
                    if (isset($file)) 
                    { 
                      if ($file==$i)
                      echo "                <A class=anoir12n HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                      else
                      echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                    elseif (isset($mfile)) 
                    { 
                      if ($mfile==$i)
                      echo "                <A class=anoir12n HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                      else
                      echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                    elseif (isset($file2)) 
                    { 
                      if ($file2==$i)
                      echo "                <A class=anoir12n HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                      else
                      echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                    elseif (!isset($file) && !isset($mfile) && !isset($file2)) 
                    { 
                    echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                  echo "                </td>\r\n";
                  echo "              </tr>\r\n";
                  $i++;
                  }
/*
                if (!($view2==1 or $file>=$middle or $mfile>=$middle or $file2>=$middle))
                {
                echo "              <tr height=15>";
                echo "                <td width=25 align=right>";
                echo "                <A HREF=\"index.php?view2=1\"><IMG SRC=\"images/down3.gif\" border=0></A>";
                echo "                </td>";
                echo "                <td width=170 align=left>";
                echo "                </td>";
                echo "              </tr>";
                }
                else
                {
                echo "              <tr>";
                echo "                <td height=10>";
                echo "                </td>";
                echo "              </tr>";
                }
*/
?>
            </table>

         </td>
        </tr>
      </table>

<?php
}
else
{
?>
      <table width=210 align=center cellpadding=2 cellspacing=0 border=0 bgcolor=0A559F>
        <tr>
          <td>

            <table width=100% valign=center align=center cellpadding=0 cellspacing=10 border=0 bgcolor=FFFFFF>
<?php
                //if ($view2==1 or $file>=$middle or $mfile>=$middle or $file2>=$middle)
                //{
                echo "              <tr height=15>";
                echo "                <td width=25 align=right>";
                echo "                <A HREF=\"index.php\"><IMG SRC=\"images/delete.gif\" border=0></A>";
                echo "                </td>";
                echo "                <td width=170 align=left>";
                echo "                </td>";
                echo "              </tr>";
                //}
                //else
                //{
                //echo "              <tr>";
                //echo "                <td height=10>";
                //echo "                </td>";
                //echo "              </tr>";
                //}

                $i=$middle;
                  while ($i<sizeof($tab))
                  {
                  echo "              <tr height=15>\r\n";
                  echo "                <td width=25 align=right>\r\n";
                  echo "                <A HREF=\"index.php?mfile=".$i."\"><img src=\"images/up.gif\" border=0></A>\r\n";
                  echo "                </td>\r\n";
                  echo "                <td width=170 align=left>\r\n";
                    if (isset($file)) 
                    { 
                      if ($file==$i)
                      echo "                <A class=anoir12n HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                      else
                      echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                    elseif (isset($mfile)) 
                    { 
                      if ($mfile==$i)
                      echo "                <A class=anoir12n HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                      else
                      echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                    elseif (isset($file2)) 
                    { 
                      if ($file2==$i)
                      echo "                <A class=anoir12n HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                      else
                      echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                    elseif (!isset($file) && !isset($mfile) && !isset($file2)) 
                    { 
                    echo "                <A class=aorange12 HREF=\"index.php?file=".$i."\">".$tab[$i]."</A>\r\n";
                    }
                  echo "                </td>\r\n";
                  echo "              </tr>\r\n";
                  $i++;
                  }
/*
              <tr>
                <td height=10>
                </td>
              </tr>
*/
                ?>

            </table>

         </td>
        </tr>
      </table>
<?php
}
?>


    </td>
    <td width=900 valign=top>

      <table class=main1 width=900 align=center cellpadding=0 cellspacing=0 border=0 bgcolor=0A559F>
        <tr>
          <td>

            <table class=main2 width=900 valign=center align=center height=100% cellpadding=0 cellspacing=0 border=0 bgcolor=FFFFFF>
              <tr>
                <td width=900 align=left class=noir12>
<?php

  if (isset($modif))
  {
  $filename="Directory/".$tab[$file2].".txt";
  // Copie
  $newfile="Directory/".$tab[$file2].'/'.date("Ymd-His").".txt";
    if (!copy($filename, $newfile))
    {
    echo "<br>La copie du fichier a échoué...<br>";
    }
  // Sauvegarde
  $fp=fopen($filename,"w");
  $comment_post=stripslashes($comment_post);
  fputs($fp,$comment_post);
  fclose($fp);
  $file=$file2; // Pour l'affichage
  }

  if ( (!isset($file)) and (!isset($mfile)) and (!isset($modif)) ) $file=0;

  //if (isset($mfile)) $file=$mfile;

  if (isset($file))
  {
    if (!isset($comment_post))
    {
    $filename="Directory/".$tab[$file].".txt";
    $fp=fopen($filename,"r");
    $contenu=fread($fp, filesize($filename));
    fclose($fp);
    }
    else
    $contenu=$comment_post;

  // Remplace les URL commencant par "http://" par des liens Hypertextes
  $j=0;
  $max=substr_count(strtolower($contenu),"http://");
  $max+=substr_count(strtolower($contenu),"https://");
  $k=0;
    while ($k<$max)
    {
    // Positions des http:// ou https://
    $pos1a=strpos(strtolower($contenu),"http://",$j);
    $pos1b=strpos(strtolower($contenu),"https://",$j);
      if ($pos1a===FALSE) $pos1a=strlen($contenu);
      if ($pos1b===FALSE) $pos1b=strlen($contenu);
    $pos1=min($pos1a,$pos1b);

    // Positions d'un espace, ou retour à la ligne, ou fin de texte
    $pos2a=strpos(strtolower($contenu)," ",$pos1);
    $pos2b=strpos(strtolower($contenu),"\r\n",$pos1);
      if ($pos2a===FALSE) $pos2a=strlen($contenu);
      if ($pos2b===FALSE) $pos2b=strlen($contenu);
    $pos2=min($pos2a,$pos2b);

    // Texte du lien entre ||
    $textej="";
    $tj=2;
    if (substr($contenu,$pos1-1,1)=="|")
    {
      while ( (substr($contenu,$pos1-$tj,1)!="|") and (($pos1-$tj)>0) )
      {
      $tj++;
      }
      if (substr($contenu,$pos1-$tj,1)=="|")
      {     
      $textej=substr($contenu,$pos1-$tj+1,$tj-2);
      }
    }    

    // Ajout du lien Hypertexte
    $link=substr($contenu,$pos1,$pos2-$pos1);
    $contenu=substr($contenu,0,$pos2)."</A>".substr($contenu,$pos2,strlen($contenu));
    $add="<A class=aorange12 HREF=\"".$link."\" target=\"_blank\">";
      if ($textej=="")
      {
      $textej=$link;
      }
      else
      {
      $pos1-=$tj;
      }
    $contenu=substr($contenu,0,$pos1).$add.$textej.substr($contenu,$pos2,strlen($contenu));
    $j=$pos1+strlen($add.$textej); // nouvelle position
    $k++;
    }

  // Remplace les <f></f> des liens Hypertextes
  $j=0;
  $max=substr_count(strtolower($contenu),"<f>");
  $k=0;
    while ($k<$max)
    {
    // Positions des http:// ou https://
    $pos1=strpos(strtolower($contenu),"<f>",$j);
    $pos2=strpos(strtolower($contenu),"</f>",$j);

    // Ajout du lien Hypertexte
    $link=substr($contenu,$pos1+3,$pos2-$pos1-3);
    $add="<A class=aorange12 HREF=\"Files/".$link."\" target=\"_blank\">".$link."</A>";
    $contenu=substr($contenu,0,$pos1).$add.substr($contenu,$pos2+4,strlen($contenu));
    $j=$pos2;
    $k++;
    }

  // Ajout du texte en rouge
  $contenu=str_replace("<r>","<font color=red>",$contenu);
  $contenu=str_replace("</r>","</font>",$contenu);

  //$contenu="                <div class=ligne><img src=\"images/puce.gif\"> ".$contenu;
  //$contenu=str_replace("\r\n","</div>\r\n                <div class=interligne2></div>\r\n                <div class=ligne><img src=\"images/puce.gif\"> ",$contenu);
  //$contenu=str_replace("                <div class=ligne><img src=\"images/puce.gif\"> </div>","                <div class=interligne>&nbsp;</div>",$contenu);
  //$contenu=$contenu."</div>\r\n                <div class=interligne2></div>\r\n";

  // Supprime les puces avec - en début de ligne
  //$contenu=str_replace("<img src=\"images/puce.gif\"> -","",$contenu);

  $contenu="              <div class=ligne><li> ".$contenu;
  $contenu=str_replace("\r\n","</li></div>\r\n                <div class=interligne2></div>\r\n                <div class=ligne><li> ",$contenu);
  $contenu="              <ul class=sqr>".$contenu; // \r\n
  $contenu=str_replace("                <div class=ligne><li> </li></div>","                <div class=interligne>&nbsp;</div>",$contenu);
  $contenu=$contenu."</li></div>\r\n                <div class=interligne2></div>\r\n";
  $contenu=$contenu."                </ul>\r\n";



// Elimine les ul pour les hr
$contenu=str_replace("<hr>","</ul><hr><ul class=sqr>",$contenu);
$contenu=str_replace("<div class=ligne><li> </ul><hr><ul class=sqr></li></div>","</ul><hr><ul class=sqr>",$contenu);

// Supprime les puces pour les - (complement)
$contenu=preg_replace("#                <div class=interligne2></div>
                <div class=ligne><li> -(.*)</li></div>#", "                </ul>\r\n<ul class=nosqr>$1</ul>\r\n                <ul class=sqr>", $contenu);               

// Supprime les puces pour les - (complement)
$contenu=preg_replace("#<ul class=sqr>
                <div class=ligne><li> -(.*)</li></div>#", "<ul class=nosqr>$1</ul>\r\n", $contenu);               
 
// Si en Première ligne
$contenu=preg_replace("#              <ul class=sqr>              <div class=ligne><li> -(.*)</li></div>#", "<ul class=nosqr>$1</ul>\r\n                <ul class=sqr>", $contenu);

// Elimine l interligne2 après un - texte
$contenu=str_replace("<ul class=sqr>
                <div class=interligne2></div>", "<ul class=sqr>",$contenu);


  echo $contenu;
  }

  if (isset($mfile))
  {
  $filename="Directory/".$tab[$mfile].".txt";
  $fp = fopen($filename,"r");
  $contenu = fread($fp, filesize($filename));
  fclose($fp);
  echo "                <table class=editor><tr><td>";
  echo "                <form action=\"index.php?modif=1\" method=\"post\">";
  echo "                <input type=\"hidden\" name=\"file2\" value=\"".$mfile."\">";
  $rows=substr_count(strtolower($contenu),"\r\n")+6;
  echo "                <input type=\"submit\" value=\">> Send\"><br>";
  echo "                <textarea name=\"comment_post\" cols=120 rows=".$rows.">".$contenu."</textarea><br>";
  echo "                <input type=\"submit\" value=\">> Send\">";
  echo "                </form>";
  echo "                </td></tr></table>";
  }


?>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>