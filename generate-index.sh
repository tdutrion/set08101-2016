#!/bin/bash
OUTPUT="./index.html" 

echo "<!DOCTYPE html>" > $OUTPUT
echo "<html>" >> $OUTPUT
echo "<head>" >> $OUTPUT
echo "  <title>SET08101 - 2016</title>" >> $OUTPUT
echo "  <link href='./style.css' rel='stylesheet' type='text/css'>" >> $OUTPUT
echo "</head>" >> $OUTPUT
echo "<body>" >> $OUTPUT
echo "  <img id=\"logo\" src=\"./ENU-logo.png\" alt=\"Edinburgh Napier University logo\">" >> $OUTPUT
echo "  <h1>SET08101 - 2016</h1>" >> $OUTPUT

echo "  <h2>Lectures</h2>" >> $OUTPUT
echo "  <nav>" >> $OUTPUT
echo "    <ul class=\"list\">" >> $OUTPUT
for filepath in `find "./lecture" -maxdepth 1 -mindepth 1 -type d| sort`; do
  name=`basename "${filepath//--/ }"`
  echo "      <li><a href=\"$filepath/index.html\" target=\"_blank\">$name</a></li>" >> $OUTPUT
done
echo "    </ul>" >> $OUTPUT
echo "  </nav>" >> $OUTPUT

echo "  <h2>Practicals</h2>" >> $OUTPUT
echo "  <nav>" >> $OUTPUT
echo "    <ul>" >> $OUTPUT
for filepath in `find "./practical" -maxdepth 1 -mindepth 1 -type d| sort`; do
  name=`basename "$filepath"`
  echo "      <li><a href=\"$filepath/index.html\" target=\"_blank\">$name</a></li>" >> $OUTPUT
done
echo "    </ul>" >> $OUTPUT
echo "  </nav>" >> $OUTPUT
echo "  <a href=\"https://github.com/tdutrion/set08101-2016\"><img style=\"position: absolute; top: 0; left: 0; border: 0;\" src=\"https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67\" alt=\"Fork me on GitHub\" data-canonical-src=\"https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png\"></a>" >> $OUTPUT

echo "</body>" >> $OUTPUT
echo "</html>" >> $OUTPUT
