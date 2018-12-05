for x in {0..100} ; do
    if (( x % 2 == 0 ))
    then
        php socks.php 
    fi
    sleep 1
done