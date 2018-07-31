c=0
while true
url=$(<url)
do
	c=`expr $c + 1`
	printf "\n$c"
	curl -H @header $url --output log
done
