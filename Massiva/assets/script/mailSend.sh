#/bin/bash
ip=$1
servidor=$(hostname)
data=$(date)
destino='suporte.telefonia@adyl.net.br'

sendemail -o tls=yes -f suporte.telefonia@adyl.net.br -t $destino -u "Falha Massiva" -m "Servidor=$servidor | ip=$ip | $data" -s mail.adyl.net.br:587 -xu suporte.telefonia@adyl.net.br -xp T3L3F0ni@2024
