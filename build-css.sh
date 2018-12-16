#!/bin/sh

IN=assets/scss/index.scss 
OUT_INTERMEDIATE1=assets/css/app.unprefixed.css
OUT_INTERMEDIATE2=assets/css/app.prefixed.css
OUT=assets/css/app.css

node_modules/.bin/node-sass --source-map-embed $IN > $OUT_INTERMEDIATE1 || exit 1
node_modules/.bin/postcss $OUT_INTERMEDIATE1 --use autoprefixer -b '> 0.1%' > $OUT_INTERMEDIATE2
mv $OUT_INTERMEDIATE2 $OUT
