<div class="nav">
  <ul>
    <li>
      <a href="gallery.php?dir=cat">Cat</a>
    </li>
    <li>
      <a href="gallery.php?dir=landscapes">Landscapes</a>
    </li>
    <li>
      <a href="gallery.php?dir=other">Other</a>
    </li>
    <li>
      <a href="../index.php">Home</a>
    </li>
  </ul>
</div>

<style media="screen">
  .nav{
    margin-top: 30px;
    height: 60px;
    line-height: 60px;
    background: #bbb
  }
  .nav ul{
    list-style: none;
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }
  .nav ul li{
    width: 100%;
    text-align: center;
  }
  .nav ul li a{
    display: block;
    width: 100%;
    font-size: 22px;
    color: #222;
  }
  .nav ul li a:hover ~ .nav{
    background: green;
  }

</style>
