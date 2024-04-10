declare -i num
num=$1
sid=$(<sid)

curl -X POST "https://verify.twilio.com/v2/Services/VAe415d4f878686310c99212b634f0d55b/Entities/ff483d1ff591898a9942916050d2ca3f/Factors/$sid" \--data-urlencode "AuthPayload=$num" \-u AC5f0d355a4ce8616348d32ef3e65c0ab9:387d4614baa402029a7cfdd2f4da9ff0 | tee res
# curl -X POST "https://verify.twilio.com/v2/Services/VAe415d4f878686310c99212b634f0d55b/Entities/ff483d1ff591898a9942916050d2ca3f/Factors/YF02661684424185f3e2c6956dc2a6372d" \--data-urlencode "AuthPayload=$num" \-u AC5f0d355a4ce8616348d32ef3e65c0ab9:387d4614baa402029a7cfdd2f4da9ff0
# echo $num
# echo $sid