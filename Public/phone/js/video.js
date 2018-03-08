window.onload = function() {
  var video = document.getElementById('myvideo')
  var num = 0
  video.onclick = function() {
    if (num == 0) {
      this.play()
      num = 1
    } else {
      this.pause()
      num = 0
    }
  }
}//视频点击暂停或播放
