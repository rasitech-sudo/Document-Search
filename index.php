<style>
  body {
    align-items: center;
    background-color: rgb(1, 5, 26);
    display: flex;
    justify-content: center;
    height: 100vh;
  }
  }

.wrapper {
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
}

.main-div {
  position: relative;
  margin: 10px;
  background-color: transparent;
}

.main-div1::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 50%;
  height: 50%;
  -webkit-box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
          box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
  z-index: -1;
  -webkit-animation-name: yellow-shadow;
          animation-name: yellow-shadow;
  -webkit-animation-timing-function: ease;
          animation-timing-function: ease;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.main-div1::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  width: 50%;
  height: 50%;
  -webkit-box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
          box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
  z-index: -1;
  -webkit-animation-name: cyan-shadow;
          animation-name: cyan-shadow;
  -webkit-animation-timing-function: ease;
          animation-timing-function: ease;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.main-div2::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
          box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
  z-index: -1;
  -webkit-animation-name: gradient-shadow;
          animation-name: gradient-shadow;
  -webkit-animation-timing-function: ease;
          animation-timing-function: ease;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.main-div3::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 50%;
  height: 100%;
  -webkit-box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
          box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
  z-index: -1;
  -webkit-animation-name: half-yellow-shadow;
          animation-name: half-yellow-shadow;
  -webkit-animation-timing-function: ease;
          animation-timing-function: ease;
  -webkit-animation-duration: 5s;
          animation-duration: 5s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

.main-div3::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  width: 50%;
  height: 100%;
  -webkit-box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
          box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
  z-index: -1;
  -webkit-animation-name: half-cyan-shadow;
          animation-name: half-cyan-shadow;
  -webkit-animation-timing-function: ease;
          animation-timing-function: ease;
  -webkit-animation-duration: 5s;
          animation-duration: 5s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

h1 {
  font-size: 50px;
  margin: 0;
  position: relative;
  z-index: 3;
  padding: 20px;
  background-color: #060C1F;
  color: #fff;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}

@-webkit-keyframes yellow-shadow {
  0% {
    top: 0;
    left: 0;
  }
  25% {
    top: 50%;
    left: 0;
  }
  50% {
    top: 50%;
    left: 50%;
  }
  75% {
    top: 0;
    left: 50%;
  }
  100% {
    top: 0;
    left: 0;
  }
}

@keyframes yellow-shadow {
  0% {
    top: 0;
    left: 0;
  }
  25% {
    top: 50%;
    left: 0;
  }
  50% {
    top: 50%;
    left: 50%;
  }
  75% {
    top: 0;
    left: 50%;
  }
  100% {
    top: 0;
    left: 0;
  }
}

@-webkit-keyframes cyan-shadow {
  0% {
    right: 0;
    bottom: 0;
  }
  25% {
    right: 0;
    bottom: 50%;
  }
  50% {
    right: 50%;
    bottom: 50%;
  }
  75% {
    right: 50%;
    bottom: 0;
  }
  100% {
    right: 0;
    bottom: 0;
  }
}

@keyframes cyan-shadow {
  0% {
    right: 0;
    bottom: 0;
  }
  25% {
    right: 0;
    bottom: 50%;
  }
  50% {
    right: 50%;
    bottom: 50%;
  }
  75% {
    right: 50%;
    bottom: 0;
  }
  100% {
    right: 0;
    bottom: 0;
  }
}

@-webkit-keyframes gradient-shadow {
  0% {
    -webkit-box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
            box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
  }
  20% {
    -webkit-box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
            box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
  }
  40% {
    -webkit-box-shadow: 0 0 17px 3px #0f0,0 0 4px 2px #0f0;
            box-shadow: 0 0 17px 3px #0f0,0 0 4px 2px #0f0;
  }
  60% {
    -webkit-box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
            box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
  }
  80% {
    -webkit-box-shadow: 0 0 17px 3px #f00,0 0 4px 2px #f00;
            box-shadow: 0 0 17px 3px #f00,0 0 4px 2px #f00;
  }
  100% {
    -webkit-box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
            box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
  }
}

@keyframes gradient-shadow {
  0% {
    -webkit-box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
            box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
  }
  20% {
    -webkit-box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
            box-shadow: 0 0 17px 3px #0ff,0 0 4px 2px #0ff;
  }
  40% {
    -webkit-box-shadow: 0 0 17px 3px #0f0,0 0 4px 2px #0f0;
            box-shadow: 0 0 17px 3px #0f0,0 0 4px 2px #0f0;
  }
  60% {
    -webkit-box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
            box-shadow: 0 0 17px 3px #ffff01,0 0 4px 2px #ffff01;
  }
  80% {
    -webkit-box-shadow: 0 0 17px 3px #f00,0 0 4px 2px #f00;
            box-shadow: 0 0 17px 3px #f00,0 0 4px 2px #f00;
  }
  100% {
    -webkit-box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
            box-shadow: 0 0 17px 3px #C586C0,0 0 4px 2px #C586C0;
  }
}

@-webkit-keyframes half-yellow-shadow {
  0% {
    top: 0;
    left: 0;
    height: 50%;
    width: 50%;
  }
  16.66% {
    top: 0;
    left: 0;
    height: 50%;
    width: 100%;
  }
  32.32% {
    top: 0;
    left: 50%;
    height: 50%;
    width: 50%;
  }
  49.98% {
    top: 50%;
    left: 50%;
    height: 50%;
    width: 50%;
  }
  66.64% {
    top: 50%;
    left: 0;
    height: 50%;
    width: 100%;
  }
  83.3% {
    top: 50%;
    left: 0;
    height: 50%;
    width: 50%;
  }
  100% {
    top: 0;
    left: 0;
    height: 50%;
    width: 50%;
  }
}

@keyframes half-yellow-shadow {
  0% {
    top: 0;
    left: 0;
    height: 50%;
    width: 50%;
  }
  16.66% {
    top: 0;
    left: 0;
    height: 50%;
    width: 100%;
  }
  32.32% {
    top: 0;
    left: 50%;
    height: 50%;
    width: 50%;
  }
  49.98% {
    top: 50%;
    left: 50%;
    height: 50%;
    width: 50%;
  }
  66.64% {
    top: 50%;
    left: 0;
    height: 50%;
    width: 100%;
  }
  83.3% {
    top: 50%;
    left: 0;
    height: 50%;
    width: 50%;
  }
  100% {
    top: 0;
    left: 0;
    height: 50%;
    width: 50%;
  }
}

@-webkit-keyframes half-cyan-shadow {
  0% {
    bottom: 0;
    right: 0;
    height: 50%;
    width: 50%;
  }
  16.66% {
    bottom: 0;
    right: 0;
    height: 50%;
    width: 100%;
  }
  32.32% {
    bottom: 0;
    right: 50%;
    height: 50%;
    width: 50%;
  }
  49.98% {
    bottom: 50%;
    right: 50%;
    height: 50%;
    width: 50%;
  }
  66.64% {
    bottom: 50%;
    right: 0;
    height: 50%;
    width: 100%;
  }
  83.3% {
    bottom: 50%;
    right: 0;
    height: 50%;
    width: 50%;
  }
  100% {
    bottom: 0;
    right: 0;
    height: 50%;
    width: 50%;
  }
}

@keyframes half-cyan-shadow {
  0% {
    bottom: 0;
    right: 0;
    height: 50%;
    width: 50%;
  }
  16.66% {
    bottom: 0;
    right: 0;
    height: 50%;
    width: 100%;
  }
  32.32% {
    bottom: 0;
    right: 50%;
    height: 50%;
    width: 50%;
  }
  49.98% {
    bottom: 50%;
    right: 50%;
    height: 50%;
    width: 50%;
  }
  66.64% {
    bottom: 50%;
    right: 0;
    height: 50%;
    width: 100%;
  }
  83.3% {
    bottom: 50%;
    right: 0;
    height: 50%;
    width: 50%;
  }
  100% {
    bottom: 0;
    right: 0;
    height: 50%;
    width: 50%;
  }
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
<div class="main-div main-div1">
      <button>Enjoy</button>
    </div>
