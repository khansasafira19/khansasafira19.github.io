<script langauge="javascript">

var popup="http://www.yahoo.com"
var alertMessage="This is an alert hehehe"

function userAlert(){

alert(alertMessage)
document.jukebox.play()
window.open(popup,"def")

}
</script>


<a href="javascript:userAlert();">Click Here</a>

<embed src='sound.mp3' autostart='true' hidden='true' loop='true' name="jukebox">