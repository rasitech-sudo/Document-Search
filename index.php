<style>
  body {
    align-items: center;
    background-color: rgb(1, 5, 26);
    display: flex;
    justify-content: center;
    height: 100vh;
  }
.typewriter h1 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
  .form {
    background-color: #15172b;
    border-radius: 20px;
    box-sizing: border-box;
    height: 500px;
    padding: 20px;
    width: 380px;
  }
  .title {
    color: #eee;
    font-family: sans-serif;
    font-size: 36px;
    font-weight: 600;
    margin-top: 30px;
  }
  .subtitle {
    color: #eee;
    font-family: sans-serif;
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
  }
  .input-container {
    height: 50px;
    position: relative;
    width: 100%;
  }
  .ic1 {
    margin-top: 40px;
  }
  .ic2 {
    margin-top: 30px;
  }
  .input {
    background-color: #303245;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    font-size: 18px;
    height: 100%;
    outline: 0;
    padding: 4px 20px 0;
    width: 100%;
  }
  .cut {
    background-color: #15172b;
    border-radius: 10px;
    height: 20px;
    left: 20px;
    position: absolute;
    top: -20px;
    transform: translateY(0);
    transition: transform 200ms;
    width: 76px;
  }
  .cut-short {
    width: 120px;
  }
  .input:focus ~ .cut,
  .input:not(:placeholder-shown) ~ .cut {
    transform: translateY(8px);
  }
  .placeholder {
    color: #65657b;
    font-family: sans-serif;
    left: 20px;
    line-height: 14px;
    pointer-events: none;
    position: absolute;
    transform-origin: 0 50%;
    transition: transform 200ms, color 200ms;
    top: 20px;
  }
  .input:focus ~ .placeholder,
  .input:not(:placeholder-shown) ~ .placeholder {
    transform: translateY(-30px) translateX(10px) scale(0.75);
  }
  .input:not(:placeholder-shown) ~ .placeholder {
    color: #808097;
  }
  .input:focus ~ .placeholder {
    color: #dc2f55;
  }
  .submit {
    background-color: #08d;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    cursor: pointer;
    font-size: 18px;
    height: 50px;
    margin-top: 38px;
    outline: 0;
    text-align: center;
    width: 100%;
  }
  .submit:active {
    background-color: #06b;
  }
</style>

<!-- Tambahkan tag form pada HTML -->
<form action="post.php" method="post">
<div class="form">
  <div class="title">Document Search</div>
  <div class="subtitle">Created By Rasi Tech</div>
  <div class="input-container ic1">
    <input name="title" class="input" type="text" placeholder=" " />
    <div class="cut"></div>
    <label for="title" class="placeholder">Title</label>
  </div>
  <div class="input-container ic2">
    <input name="extension" class="input" type="text" placeholder=" " />
    <div class="cut"></div>
    <label for="extension" class="placeholder">Extension</label>
  </div>
  <div class="input-container ic2">
    <input name="domain" class="input" type="text" placeholder=" " />
    <div class="cut cut-short"></div>
    <label for="domain" class="placeholder">Domain (Optional)</label>
  </div>
  <button type="submit" class="submit">Search</button>
</div>
</form>
<br></br><br></br><div class="typewriter">
  <center><font color="white"><h1>Download versi Android</h1></font></center>
  <center><font color="white"><h1>dan Desktop di Telegram</h1></font></center>
  <center><font color="white"><h1>@RasiTechChannel.</h1></font></center>
</div>
