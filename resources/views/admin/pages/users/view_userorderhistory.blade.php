@extends('admin.layout.master')
@section('content')

<style>
    .btnstyle {
        background-color: #4EBA46;
        color: white;
    }
    
    .btnstyle:hover{
        background-color: #036C3C;
        color: white;
    }
</style>

    <div class="page-content">
        <div class="main-wrapper">
            <a class="btn btn-success mb-2" href="{{ route('user.index') }}">Back</a>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="card">
                      <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $user->first_name }} {{ $user->last_name }}</h6>
                        <p class="card-text">{{ $user->email }}</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card">
                      <div class="card-body text-center">
                        <!--<img src="assets/images/wallet.png" class="card-img-top" alt="wallet-icon" style="width: 50%;">-->
                        <h6 class="mt-2">Wallet Balance</h6>
                        <h6>--- Pending ---</h6>
                        <!--<a href="#" class="card-link">+ Add money</a>-->
                        <!--<a href="#" class="card-link">- Deduct money</a>-->
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card">
                     <div class="card-body text-center">
                        <!--<img src="assets/images/shopping-cart.png" class="card-img-top" alt="wallet-icon" style="width: 50%;">-->
                        <h6 class="mt-2">Orders</h6>
                        <h6>--- Pending ---</h6>
                        
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="card">
                      <div class="card-body text-center">
                        <!--<img src="assets/images/shopping-cart.png" class="card-img-top" alt="wallet-icon" style="width: 50%;">-->
                        <h6 class="mt-2">Referral Code</h6>
                        <h6>--- Pending ---</h6>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">All Orders (Pending)</h5>
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order Number</th>
                                            <th>Payment Type</th>
                                            <th>Payment Id</th>
                                            <th>Order Type</th>
                                            <th>Order Status</th>
                                            <th>Order Assigned To</th>
                                            <th>Created at</th>
                                            <th>Change Order Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>$170,750</td>
                                            <td>$170,750</td>
                                            <td>$170,750</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                            <td>$86,000</td>
                                            <td>$86,000</td>
                                            <td>$86,000</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                            <td>$433,060</td>
                                            <td>$433,060</td>
                                            <td>$433,060</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>$162,700</td>
                                            <td>$162,700</td>
                                            <td>$162,700</td>
                                            <td>
                                                <span class="badge bg-success"><a href="#">view</a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                            <td>$372,000</td>
                                            <td>$372,000</td>
                                            <td>$372,000</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                            <td>$137,500</td>
                                            <td>$137,500</td>
                                            <td>$137,500</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                            <td>$327,900</td>
                                            <td>$327,900</td>
                                            <td>$327,900</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                            <td>$205,500</td>
                                            <td>$205,500</td>
                                            <td>$205,500</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                            <td>$90,560</td>
                                            <td>$90,560</td>
                                            <td>$90,560</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                            <td>$342,000</td>
                                            <td>$342,000</td>
                                            <td>$342,000</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                            <td>$470,600</td>
                                            <td>$470,600</td>
                                            <td>$470,600</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                            <td>$313,500</td>
                                            <td>$313,500</td>
                                            <td>$313,500</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                            <td>$198,500</td>
                                            <td>$198,500</td>
                                            <td>$198,500</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                            <td>$725,000</td>
                                            <td>$725,000</td>
                                            <td>$725,000</td>
                                            <td>$725,000</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                            <td>$237,500</td>
                                            <td>$237,500</td>
                                            <td>$237,500</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                            <td>$132,000</td>
                                            <td>$132,000</td>
                                            <td>$132,000</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                            <td>$217,500</td>
                                            <td>$217,500</td>
                                            <td>$217,500</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                            <td>$345,000</td>
                                            <td>$345,000</td>
                                            <td>$345,000</td>
                                            <td>$345,000</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>8</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                            <td>$106,450</td>
                                            <td>$106,450</td>
                                            <td>$106,450</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sydney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                            <td>$85,600</td>
                                            <td>$85,600</td>
                                            <td>$85,600</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                            <td>$1,200,000</td>
                                            <td>$1,200,000</td>
                                            <td>$1,200,000</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                            <td>$92,575</td>
                                            <td>$92,575</td>
                                            <td>$92,575</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                            <td>$357,650</td>
                                            <td>$357,650</td>
                                            <td>$357,650</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                            <td>$206,850</td>
                                            <td>$206,850</td>
                                            <td>$206,850</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                            <td>$850,000</td>
                                            <td>$850,000</td>
                                            <td>$850,000</td>
                                            <td>$850,000</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sydney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                            <td>$95,400</td>
                                            <td>$95,400</td>
                                            <td>$95,400</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                            <td>$145,000</td>
                                            <td>$145,000</td>
                                            <td>$145,000</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                            <td>$235,500</td>
                                            <td>$235,500</td>
                                            <td>$235,500</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                            <td>$324,050</td>
                                            <td>$324,050</td>
                                            <td>$324,050</td>
                                            <td>$324,050</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                            <td>$164,500</td>
                                            <td>$164,500</td>
                                            <td>$164,500</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                            <td>$109,850</td>
                                            <td>$109,850</td>
                                            <td>$109,850</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                            <td>$136,200</td>
                                            <td>$136,200</td>
                                            <td>$136,200</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                            <td>$645,750</td>
                                            <td>$645,750</td>
                                            <td>$645,750</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                            <td>$234,500</td>
                                            <td>$234,500</td>
                                            <td>$234,500</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                            <td>$163,500</td>
                                            <td>$163,500</td>
                                            <td>$163,500</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                            <td>$139,575</td>
                                            <td>$139,575</td>
                                            <td>$139,575</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                            <td>$87,500</td>
                                            <td>$87,500</td>
                                            <td>$87,500</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                            <td>$138,575</td>
                                            <td>$138,575</td>
                                            <td>$138,575</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                            <td>$75,650</td>
                                            <td>$75,650</td>
                                            <td>$75,650</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                            <td>$145,600</td>
                                            <td>$145,600</td>
                                            <td>$145,600</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                            <td>$356,250</td>
                                            <td>$356,250</td>
                                            <td>$356,250</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                            <td>$103,500</td>
                                            <td>$103,500</td>
                                            <td>$103,500</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                            <td>$86,500</td>
                                            <td>$86,500</td>
                                            <td>$86,500</td>
                                            <td>$86,500</td>
                                        </tr>
                                    
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                            <td>$183,000</td>
                                            <td>$183,000</td>
                                            <td>$183,000</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                            <td>$112,000</td>
                                            <td>$112,000</td>
                                            <td>$112,000</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Order Number</th>
                                            <th>Payment Type</th>
                                            <th>Payment Id</th>
                                            <th>Order Type</th>
                                            <th>Order Status</th>
                                            <th>Order Assigned To</th>
                                            <th>Created at</th>
                                            <th>Change Order Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script>
        function myFunction() {
            alert("Do you really want to delete this country?");
        }
    </script>

@endsection
