<!DOCTYPE html>
<html>
   <head>
      <title>GCC Remit</title>
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
         crossorigin="anonymous"
         />
      <style>
         * {
         margin: 0;
         padding: 0;
         }
         .navbar {
         display: flex;
         align-items: center;
         justify-content: center;
         position: sticky;
         top: 0;
         cursor: pointer;
         }
         .background {
         background: #fff;
         background-blend-mode: darken;
         background-size: cover;
         }
         .nav-list {
         width: 93%;
         display: flex;
         align-items: center;
         text-transform: uppercase;
         }
         .logo {
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .logo img {
         width: 180px;
         border-radius: 50px;
         }
         .nav-list li {
         list-style: none;
         padding: 26px 30px;
         }
         .nav-list li a {
         text-decoration: none;
         color: gray;
         font-size: 14px;
         font-family: revert;
         }
         .nav-list li a:hover {
         color: grey;
         }
         .rightnav {
         width: 30%;
         text-align: right;
         }
         #search {
         padding: 5px;
         font-size: 17px;
         border: 2px solid grey;
         border-radius: 9px;
         }
         .firstsection {
         background-color: white;
         height: 400px;
         }
         .bannersecyion {
         width: 100%;
         height: 400px;
         }
         .secondsection {
         background-color: white;
         height: 400px;
         }
         .box-main {
         display: flex;
         justify-content: center;
         align-items: center;
         color: black;
         max-width: 80%;
         margin: auto;
         height: 80%;
         }
         .firsthalf {
         width: 100%;
         display: flex;
         flex-direction: column;
         justify-content: center;
         }
         .secondhalf {
         width: 30%;
         }
         .secondhalf img {
         width: 70%;
         border: 4px solid white;
         border-radius: 150px;
         display: block;
         margin: auto;
         }
         .text-big {
         font-family: "Piazzolla", serif;
         font-weight: bold;
         font-size: 35px;
         }
         .text-small {
         font-size: 18px;
         }
         .btn {
         padding: 8px 20px;
         margin: 7px 0;
         border: 2px solid white;
         border-radius: 8px;
         background: none;
         color: white;
         cursor: pointer;
         }
         .btn-sm {
         padding: 6px 10px;
         vertical-align: middle;
         }
         .section {
         height: 400px;
         display: flex;
         align-items: center;
         justify-content: center;
         max-width: 90%;
         margin: auto;
         }
         .section-Left {
         flex-direction: row-reverse;
         }
         .paras {
         padding: 0px 65px;
         }
         .thumbnail img {
         width: 250px;
         border: 2px solid black;
         border-radius: 26px;
         margin-top: 19px;
         }
         .center {
         text-align: center;
         }
         .text-footer {
         text-align: center;
         padding: 30px 0;
         font-family: "Ubuntu", sans-serif;
         display: flex;
         justify-content: center;
         color: white;
         }
         .nav-row {
         width: 100%;
         }
         .selectWrapper {
         border-radius: 36px;
         display: inline-block;
         overflow: hidden;
         background: #cccccc;
         border: 1px solid #cccccc;
         }
         .selectBox {
         width: 140px;
         height: 40px;
         border: 0px;
         outline: none;
         }
         .text {
         position: absolute;
         z-index: 999;
         margin: 0 auto;
         left: -10%;
         right: 76%;
         top: 25%; /* Adjust this value to move the positioned div up and down */
         text-align: end;
         width: 60%; /* Set the width of the positioned div */
         color: #e3e3ed;
         }
         #rcorners2 {
         border-radius: 25px;
         border: 2px solid #2ca513;
         padding: 12px;
         width: 350px;
         height: 70px;
         margin-left: 39%;
         color: #3131bf;
         }
         #rcorners3 {
          border-radius: 25px;
    border: 2px solid #2ca513;
    padding: 2px;
    width: 350px;
    height: 52px;
    margin-left: 39%;
    color: #ffffff;
    margin: auto;
         }
         .card {
         width: 25%;
         float: right;
         margin-right: 13%;
         margin-top: -39%;
         z-index: 2;
         border-radius: 2.25rem !important;
         background-color: #5050cd;
         }
         .card2 {
         width: 52%;
         float: right;
         z-index: 2;
         border-radius: 2.25rem !important;
         background-color: #ffffff;
         margin-left: 23%;
         }
         .card3 {
         
    width: 71%;
    background-color: #ffffff;
    margin-left: 15%;
    height: 241px;
}
         .card-header {
         text-align: center;
         background: #4cdb4c;
         margin-bottom: 20px;
         border-color: #4cdb4c;
         }
         .vl {
         border-left: 3px solid green;
         height: 250px;
         position: absolute;
         left: 50%;
         margin-left: -3px;
         top: 30;
         }
      </style>
   </head>
   <body>
      <nav class="navbar background">
         <div class="row nav-row">
            <div class="col-8"></div>
            <div class="col-2">
               <div class="selectWrapper" style="margin-left: -35px">
                  <input
                     type="text"
                     name="city"
                     class="form-control"
                     list="cityname"
                     placeholder="United Kingdom"
                     />
                  <datalist id="cityname">
                     <option value="Boston"></option>
                     <option value="Cambridge"></option>
                  </datalist>
               </div>
            </div>
            <div class="col-2" style="margin-left: -60px">
               <input
                  type="text"
                  name="city"
                  class="form-control"
                  list="cityname"
                  placeholder="Select Langauge"
                  />
               <datalist id="cityname">
                  <option value="Boston"></option>
                  <option value="Cambridge"></option>
               </datalist>
            </div>
         </div>
      </nav>
      <nav class="navbar background">
         <ul class="nav-list">
            <div class="logo">
               <img src="https://www.gccremit.com/images/LoginLogo.png" />
            </div>
            <li><a href="#web">About Us</a></li>
            <li><a href="#program">Be our agent </a></li>
            <li><a href="#course">our services</a></li>
            <li><a href="#course">technology</a></li>
            <li><a href="#course">our network</a></li>
            <li><a href="#course">our contact us</a></li>
            <li><a href="#course">agent login</a></li>
            <li><a href="#course">register</a></li>
         </ul>
      </nav>
      <section class="bannersection">
         <div class="box-main">
            <div class="firstHalf">
               <img src="<?php echo base_url(); ?>assets/banner.png" alt="" />
               <div class="text">
                  <h1>Brand Preferred By Millions...</h1>
               </div>
            </div>
         </div>
         <div class="shadow p-3 mb-5rounded card">
            <div class="text-center">
               <h5 style="color: white">INSTANT CALCULATOR</h5>
               <h6 style="color: white">You get the real exchange</h6>
               <div class="form-group" style="margin-bottom: 20px; margin-top: 40px">
                  <input
                     type="text"
                     name="city"
                     class="form-control"
                     list="cityname"
                     placeholder="SEND    1000"
                     />
                  <datalist id="cityname">
                     <option value="Boston"></option>
                     <option value="Cambridge"></option>
                  </datalist>
               </div>
               <div class="form-group" style="margin-bottom: 30px">
                  <input
                     type="text"
                     name="city"
                     class="form-control"
                     list="cityname"
                     placeholder="RECEIVE    19.9084"
                     />
                  <datalist id="cityname">
                     <option value="Boston"></option>
                     <option value="Cambridge"></option>
                  </datalist>
               </div>
               <div class="shadow p-3 mb-5 bg-white rounded card-small">
                  <div class="row">
                     <div class="col-6" style="text-align: left">
                        <span> <strong>You Send</strong> </span><br />
                        <span>Charges</span> <br />
                        <span style="color: #3aaf2a">Receipient Receives</span>
                     </div>
                     <div class="col-6">
                        <span> <strong>1000 AED</strong> </span> <br />
                        <span>15AED</span> <br />
                        <span style="color: #3aaf2a"> 19908.40 INR</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="event" style="margin-top: 40px">
         <div class="container pb-0 pt-1">
            <div class="section-content">
					<form action="<?= base_url()."transaction/add"?>" method="post">
					<div class="row">
                  <div class="shadow p-3 mb-5 rounded card2">
                     <div class="card-header">
                        <h5 style="color: white">TRANSACTION TRACKER</h5>
                     </div>
                     <div class="text-center">
                        <div class="row">
                           <div class="col-6">
                              Simply enter your 12 digit GTN number to know the status of
                              your money transfer.
                           </div>
                           <div class="col-6">
                              <div class="form-group">
                                 <input
                                    type="text"
                                    class="form-control"
                                    name="transaction_no"
                                    id=""
                                    placeholder="XXXX XXXX XXXX"
                                    />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="footer" style="float: right">
                        <div class="float-right">
                           <button class="btn" type="submit" value="submit" style="background-color: #3131bf">
                           Transaction Status
                           </button>
                           <button class="btn" style="background-color: #3131bf">
                           Clear
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
					</form>
             
            </div>
         </div>
      </section>
      <section id="event" style="margin-top: 40px">
         <div class="container pb-0 pt-1">
            <div class="section-content">
               <div class="row" style="margin-bottom: 40px">
                  <div class="text-center" id="rcorners2">
                     <h2>Why GCC Remit</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-5">
                     <img src="<?php echo base_url(); ?>assets/banner.png" width="90%" class="img-fullwidth" alt="" />
                  </div>
                  <div class="col-md-7 pb-sm-20">
                     <div class="why_choose">
                        <p>
                           GCC Remit offers one of the best benefit propositions for
                           Agents among instant transfer brands. And we have built many
                           unique features onto our revenue structure which would
                           optimize your benefits as an GCC Remit Agent. It's no
                           coincidence that we have one of the best agent networks in the
                           globe consisting of prestigious banking and non-banking
                           entities. As an GCC Remit Agent, you could be a proud partner
                           of one of the fastest growing brands in global instant money
                           transfers. Learn how to you can become an GCC Remit Agent.
                        </p>
                     </div>
                     <div style="float: right">Learn more</div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="event" style="margin-top: 40px">
         <div class="container pb-0 pt-1">
         <div class="section-content">
         <div
            class="container"
            style="background-color: #3131bf; height: 50px"
            >
            <div class="text-center" style="color: #fff; margin-top: 10px">
               <h4>How to send & receive money</h4>
            </div>
            <div
               class="container"
               style="background-color: #3aaf2a; height: 50px"
               ></div>
            <div style="background-color: #fff; height: 300px; margin-top: 60px">
               <div class="row">
                  <div class="col-md-5">
                     <div class="container text-center" style="margin-top: 10px;">
                        <label>Visit the nearest GCC Remit Location</label> <br /><br />
                        <label> Deposit the Money </label><br /><br />
                        <label> Get a 12-digit GTN Number </label><br /><br />
                        <label>Share the GTN Number the receiver</label>
                     </div>
                  </div>
                  <div class="vl"></div>
                  <div class="col-md-5" style="margin-left:50px">
                     <div class="container text-center" style="margin-top: 10px;">
                        <label>Visit the nearest GCC Remit Location</label> <br /><br />
                        <label> Share the 12-Digit GTN 
                        Number and Identity Proof </label><br /><br />
                        <label> Receive the money  </label><br /><br />
                     </div>
                  </div>
               </div>
            </div>
            <div class="container" style="background-color: #3aaf2a; height: 10px" ></div>
            <div class="container" style="background-color: #3131bf; height: 800px">
               <div class="row">
                  <div class="text-center" id="rcorners3">
                     <h2>Product & Serives</h2>
                  </div>
               </div>
               <div class="row" style="margin-top: 20px;">
              
                 <div class="col-6">
                  <div class="shadow p-3 mb-5 bg-white rounded card3">
                    <div class="row">
                      <div class="col-6">

                      </div>
                      <div class="col-6">
                        <h4>Cash Pickup</h4>
                        <p>Your beneficiary can collect 
                          Cash from our designated 
                          Authorized Payout Partners 
                          worldwide</p>
                      </div>
                    </div>
                   
                    </div>

                 </div>
                 <div class="col-6">
                  <div class="shadow p-3 mb-5 bg-white rounded card3">
                    <div class="row">
                      <div class="col-6">

                      </div>
                      <div class="col-6">
                        <h4>Cash To Home</h4>
                        <p>You can send Cash at the door 
                          step of your loved ones back 
                          home</p>
                      </div>
                    </div>
                 </div>
                 
               </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              
              <div class="col-6">
               <div class="shadow p-3 mb-5 bg-white rounded card3">
                <div class="row">
                  <div class="col-6">

                  </div>
                  <div class="col-6">
                    <h4>Cash To Mobile</h4>
                    <p>You can send Cash to Mobile 
                      Wallet of the Beneficiary for 
                      multiple purposes like Utility 
                      Payments, Shopping and ATM </p>
                  </div>
                </div>
                 </div>

              </div>
              <div class="col-6">
               <div class="shadow p-3 mb-5 bg-white rounded card3">
                <div class="row">
                  <div class="col-6">

                  </div>
                  <div class="col-6">
                    <h4>Cash To Account</h4>
                    <p>You can send Cash to any Bank 
                      Account globally</p>
                  </div>
                </div>
              </div>
              
            </div>
         </div>
         </div>
         <img src="" alt="">
         <div class="container" style="background-color:#3aaf2a; height: 200px">
        </div>
         <div class="container" style="background-color: #3131bf; height: 200px">
          <div class="row">
            <div class="col-3">
              <div class="logo">
                <img src="https://www.gccremit.com/images/LoginLogo.png" />
             </div>
             <div style="color: white;">
             <div style="margin-top: 10px;margin-left: 30%;">
              +971-4-4432003 <br>
              +971-4-4431884 <br>
              info@gccremit.com
             </div>
             </div>
            
            </div>
            <div class="col-3">
              <div style="color: white;margin-top: 35px;">
              <div class="logo">
                Quick links
             </div>
             
              <div style="margin-top: 10px;margin-left: 30%;">
                Who we are<br>
                Why GCC Remit <br>
               FAQs
               </div>
              </div>
            </div>
            <div class="col-3">
              <div style="color: white;margin-top: 35px;">
                <div class="logo">
                  Technology
               </div>
               
                <div style="margin-top: 10px;margin-left: 30%;">
                  Who we are<br>
                  Why GCC Remit <br>
                 FAQs
                 </div>
                </div>
            </div>
            <div class="col-3">
              <div style="color: white;margin-top: 35px;">
                <div class="logo">
                Our Services
               </div>
               
                <div style="margin-top: 10px;margin-left: 30%;">
                  Who we are<br>
                  Why GCC Remit <br>
                 FAQs
                 </div>
                </div>
            </div>
          </div>
</div>
<div class="container" style="background-color:#080a08; height: 30px">
  <div class="row text-center ">
    <span style="color: white;">A M L P O L I C Y | P R I V A C Y P O L I C Y | F E E D B A C K F O R M | D I S C L A I M E R</span>

  </div>
</div>
      </section>
      <footer class="background">
         <p class="text-footer">Copyright ©-All rights are reserved</p>
      </footer>
   </body>
</html>
