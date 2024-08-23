@extends('layouts.dashboard') 
@section('content')

    <script>
    if (localStorage.getItem('techSMMCurrentMode')) {
      const bodyFire2 = document.getElementById('body');
      bodyFire2.classList.add('nightmode');
    }
  </script>
  <main id="main_container">
    <div class="d-none mob_bg_closer_sidebar" onclick="toggleSidebar()"></div>
    @include('pages.dashboard.includes.sidebar')

    <div class="content_area">
        

      @include('pages.dashboard.includes.topHeader')
      <div class="content">
        <!-- page and other top info -->
        <div id="page_info">

        </div>
        <!-- // page and other top info -->
        <section id="api">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card_v2 mb-4">
                    <div class="card-body">
                        <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                              Api Documentations
                            </div>
                        </div>

                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                              <td class="width-40">HTTP Method</td>
                              <td>POST</td>
                            </tr>
                            <tr>
                              <td>API URL</td>
                              <td>https://techsmm.com/api/v2</td>
                            </tr>
                                                          <tr>
                                <td>API Key</td>
                                <td>Get an API key on the <a href="https://techsmm.com/account">Account</a> page</td>
                              </tr>
                                                        <tr>
                              <td>Response format</td>
                              <td>JSON</td>
                            </tr>
                            <tr>
                                <td>Example codes</td>
                                <td>  <a href="/example.txt" class="" target="_blank">Example of PHP code</a></td>
                            </tr>
                            </tbody>
                          </table>
                    </div>
                </div>

                <div class="card card_v2">
                    <div class="card-body">
                                                <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Service list
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>services</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            [
    {
        "service": 1,
        "name": "Followers",
        "type": "Default",
        "category": "First Category",
        "rate": "0.90",
        "min": "50",
        "max": "10000",
        "refill": true,
        "cancel": true
    },
    {
        "service": 2,
        "name": "Comments",
        "type": "Custom Comments",
        "category": "Second Category",
        "rate": "8",
        "min": "10",
        "max": "1500",
        "refill": false,
        "cancel": true
    }
]
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Add order
                            </div>
                        </div>
                                                                              <p>
                              <form class="form-inline">
                                <div class="form-group">
                                  <select class="form-control input-sm" id="service_type">
                                                                          <option value="0">Default</option>
                                                                          <option value="10">Package</option>
                                                                          <option value="2">Custom Comments</option>
                                                                          <option value="4">Mentions Custom List</option>
                                                                          <option value="6">Mentions Hashtag</option>
                                                                          <option value="7">Mentions User Followers</option>
                                                                          <option value="8">Mentions Media Likers</option>
                                                                          <option value="14">Custom Comments Package</option>
                                                                          <option value="15">Comment Likes</option>
                                                                          <option value="17">Poll</option>
                                                                          <option value="18">Comment Replies</option>
                                                                          <option value="100">Subscriptions</option>
                                                                      </select>
                                </div>
                              </form>
                            </p>
                                                                                   <div id="type_0" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>quantity</td>
                                    <td>Needed quantity</td>
                                  </tr>
                                                                  <tr>
                                    <td>runs (optional)</td>
                                    <td>Runs to deliver</td>
                                  </tr>
                                                                  <tr>
                                    <td>interval (optional)</td>
                                    <td>Interval in minutes</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_10" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_2" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>comments</td>
                                    <td>Comments list separated by \r\n or \n</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_4" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>usernames</td>
                                    <td>Usernames list separated by \r\n or \n</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_6" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>quantity</td>
                                    <td>Needed quantity</td>
                                  </tr>
                                                                  <tr>
                                    <td>hashtag</td>
                                    <td>Hashtag to scrape usernames from</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_7" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>quantity</td>
                                    <td>Needed quantity</td>
                                  </tr>
                                                                  <tr>
                                    <td>username</td>
                                    <td>URL to scrape followers from</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_8" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>quantity</td>
                                    <td>Needed quantity</td>
                                  </tr>
                                                                  <tr>
                                    <td>media</td>
                                    <td>Media URL to scrape likers from</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_100" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>username</td>
                                    <td>Username</td>
                                  </tr>
                                                                  <tr>
                                    <td>min</td>
                                    <td>Quantity min</td>
                                  </tr>
                                                                  <tr>
                                    <td>max</td>
                                    <td>Quantity max</td>
                                  </tr>
                                                                  <tr>
                                    <td>posts (optional)</td>
                                    <td>Use this parameter if you want to limit the number of new (future) posts that will be parsed and for which orders will be created. If posts parameter is not set, the subscription will be created for an unlimited number of posts.</td>
                                  </tr>
                                                                  <tr>
                                    <td>old_posts (optional)</td>
                                    <td>Number of existing posts that will be parsed and for which orders will be created, can be used if this option is available for the service.</td>
                                  </tr>
                                                                  <tr>
                                    <td>delay</td>
                                    <td>Delay in minutes. Possible values: 0, 5, 10, 15, 30, 60, 90, 120, 150, 180, 210, 240, 270, 300, 360, 420, 480, 540, 600</td>
                                  </tr>
                                                                  <tr>
                                    <td>expiry (optional)</td>
                                    <td>Expiry date. Format d/m/Y</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_14" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>comments</td>
                                    <td>Comments list separated by \r\n or \n</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_15" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>quantity</td>
                                    <td>Needed quantity</td>
                                  </tr>
                                                                  <tr>
                                    <td>username</td>
                                    <td>Username of the comment owner</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_17" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>quantity</td>
                                    <td>Needed quantity</td>
                                  </tr>
                                                                  <tr>
                                    <td>answer_number</td>
                                    <td>Answer number of the poll</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                      <div id="type_18" style="display:none;">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th class="width-40">Parameters</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                  <tr>
                                    <td>key</td>
                                    <td>Your API key</td>
                                  </tr>
                                                                  <tr>
                                    <td>action</td>
                                    <td>add</td>
                                  </tr>
                                                                  <tr>
                                    <td>service</td>
                                    <td>Service ID</td>
                                  </tr>
                                                                  <tr>
                                    <td>link</td>
                                    <td>Link to page</td>
                                  </tr>
                                                                  <tr>
                                    <td>username</td>
                                    <td>Username</td>
                                  </tr>
                                                                  <tr>
                                    <td>comments</td>
                                    <td>Comments list separated by \r\n or \n</td>
                                  </tr>
                                                                </tbody>
                              </table>
                            </div>
                                                              
                        <p><strong>Example response</strong></p>
            <pre>
            {
    "order": 23501
}
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Order status
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>status</td>
                              </tr>
                                                          <tr>
                                <td>order</td>
                                <td>Order ID</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            {
    "charge": "0.27819",
    "start_count": "3572",
    "status": "Partial",
    "remains": "157",
    "currency": "USD"
}
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Multiple orders status
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>status</td>
                              </tr>
                                                          <tr>
                                <td>orders</td>
                                <td>Order IDs (separated by a comma, up to 100 IDs)</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            {
    "1": {
        "charge": "0.27819",
        "start_count": "3572",
        "status": "Partial",
        "remains": "157",
        "currency": "USD"
    },
    "10": {
        "error": "Incorrect order ID"
    },
    "100": {
        "charge": "1.44219",
        "start_count": "234",
        "status": "In progress",
        "remains": "10",
        "currency": "USD"
    }
}
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Create refill
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>refill</td>
                              </tr>
                                                          <tr>
                                <td>order</td>
                                <td>Order ID</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            {
    "refill": "1"
}
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Create multiple refill
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>refill</td>
                              </tr>
                                                          <tr>
                                <td>orders</td>
                                <td>Order IDs (separated by a comma, up to 100 IDs)</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            [
    {
        "order": 1,
        "refill": 1
    },
    {
        "order": 2,
        "refill": 2
    },
    {
        "order": 3,
        "refill": {
            "error": "Incorrect order ID"
        }
    }
]
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Get refill status
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>refill_status</td>
                              </tr>
                                                          <tr>
                                <td>refill</td>
                                <td>Refill ID</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            {
    "status": "Completed"
}
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Get multiple refill status
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>refill_status</td>
                              </tr>
                                                          <tr>
                                <td>refills</td>
                                <td>Refill IDs (separated by a comma, up to 100 IDs)</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            [
    {
        "refill": 1,
        "status": "Completed"
    },
    {
        "refill": 2,
        "status": "Rejected"
    },
    {
        "refill": 3,
        "status": {
            "error": "Refill not found"
        }
    }
]
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                Create cancel
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>cancel</td>
                              </tr>
                                                          <tr>
                                <td>orders</td>
                                <td>Order IDs (separated by a comma, up to 100 IDs)</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            [
    {
        "order": 9,
        "cancel": {
            "error": "Incorrect order ID"
        }
    },
    {
        "order": 2,
        "cancel": 1
    }
]
            </pre>
                                              <div id="def_side_title">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="name">
                                User balance
                            </div>
                        </div>
                                                  <table class="table table-bordered">
                            <thead>
                            <tr>
                              <th class="width-40">Parameters</th>
                              <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                                          <tr>
                                <td>key</td>
                                <td>Your API key</td>
                              </tr>
                                                          <tr>
                                <td>action</td>
                                <td>balance</td>
                              </tr>
                                                        </tbody>
                          </table>
                                    
                        <p><strong>Example response</strong></p>
            <pre>
            {
    "balance": "100.84292",
    "currency": "USD"
}
            </pre>
                                          </div>
                </div>
            </div>
        </div>
    </div>
</section>
      </div>
    </div>
  </main>
  
  

<style>
    .whatsapp-container{padding:24px}.whatsapp-button{width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF!important;border-radius:50px;text-align:center;font-size:30px;box-shadow:2px 2px 3px #999;display:flex;align-items:center;justify-content:center;text-decoration:none!important;-webkit-transition:all 0.3s ease;-moz-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;transform:scale(0.9)}.whatsapp-button:hover{transform:scale(1);background-color:#1fcc5f}
</style>
<div class="integration-fixed integration-fixed__bottom-right">
    <div class="whatsapp-container">
        <a href="https://api.whatsapp.com/send?phone=+8801708924551" target="_blank" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GBZ2DN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  <!-- Modal -->
  <div class="modal fade" id="GGstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="GGstaticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body status_modal">
          <!-- <div class="d-flex align-items-start"> -->
          <button type="button" class="modal_status_close btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="far fa-times"></i>
          </button>
          <div class="row">
            <div class="col-md-2">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link text-start  active" id="v-pills-NEW-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-NEW" type="button" role="tab" aria-controls="v-pills-NEW"
                  aria-selected="true"><i class="fas fa-star"></i> NEW</button>
                <button class="nav-link text-start" id="v-pills-JUNIOR-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-JUNIOR" type="button" role="tab" aria-controls="v-pills-JUNIOR"
                  aria-selected="false"><i class="fas fa-child"></i> JUNIOR </button>
                <button class="nav-link text-start" id="v-pills-Regular-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-Regular" type="button" role="tab" aria-controls="v-pills-Regular"
                  aria-selected="false"><i class="fad fa-user-astronaut"></i> REGULAR</button>
                <button class="nav-link text-start" id="v-pills-FREQUENT-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-FREQUENT" type="button" role="tab" aria-controls="v-pills-FREQUENT"
                  aria-selected="false"><i class="fas fa-gem"></i> FREQUENT </button>

                <button class="nav-link text-start" id="v-pills-ELITE-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-ELITE" type="button" role="tab" aria-controls="v-pills-ELITE"
                  aria-selected="false"><i class="fas fa-badge-sheriff"></i> ELITE</button>
                <button class="nav-link text-start" id="v-pills-VIP-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-VIP" type="button" role="tab" aria-controls="v-pills-VIP"
                  aria-selected="false"><i class="fas fa-chess-king"></i> VIP </button>

                <button class="nav-link text-start" id="v-pills-MASTER-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-MASTER" type="button" role="tab" aria-controls="v-pills-MASTER"
                  aria-selected="false"><i class="fas fa-crown"></i> MASTER</button>

              </div>
            </div>
            <div class="col-md-10">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-NEW" role="tabpanel"
                  aria-labelledby="v-pills-NEW-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-star"></i> NEW</h3>
                    <ul>
                      <p>👍24/7 ticket support</p>
                    
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-JUNIOR" role="tabpanel" aria-labelledby="v-pills-JUNIOR-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-child"></i> JUNIOR</h3>
                    <ul>
                      <p>👍24/7 ticket support</p>
                      
                      <p>👍Child Panel - Discount ( 50% Discount for 1st month bill )</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Regular" role="tabpanel" aria-labelledby="v-pills-Regular-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fad fa-user-astronaut"></i> REGULAR</h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                    
                      <p>👍 Up to 5% Payments Bonus</p>
                      <p>👍Free Child Panel ( 1st Month Free )</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-FREQUENT" role="tabpanel" aria-labelledby="v-pills-FREQUENT-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-gem"></i> FREQUENT</h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                   
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-ELITE" role="tabpanel" aria-labelledby="v-pills-ELITE-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-badge-sheriff"></i> ELITE</h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                      
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                      <p>👍 5-10% Discount Available</p>
                    </ul>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-VIP" role="tabpanel" aria-labelledby="v-pills-VIP-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-chess-king"></i> VIP </h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                      
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                      <p>👍 5-10% Discount Available</p>
                      <p>👍 Early Notification On new services</p>
                      <p>👍 Whatsapp Support by Team</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-MASTER" role="tabpanel" aria-labelledby="v-pills-MASTER-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-crown"></i> MASTER </h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                    
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                      <p>👍 5-10% Discount Available</p>
                      <p>👍 Early Notification On new services</p>
                      <p>👍 Whatsapp Support by Team</p>
                      <p>👍 Special Discount by the admin</p>
                      <p>👍 Support handle by the admin</p>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>

    
  
<a href="https://t.me/techsmmannouncement" target="_blank">
  <div id="myAliceWebChat"><div style="background: rgb(42, 171, 238); box-sizing: border-box; display: inline-flex; padding: 10px 14px; justify-content: center; align-items: center; color: rgb(255, 255, 255); cursor: pointer; border-radius: 20px; position: fixed; box-shadow: none; left: 20px; right: auto; bottom: 26px; z-index: 99999;"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"></path></svg><span style="margin-left: 8px; font-style: normal; font-size: 14px; font-weight: 600; line-height: 20px;">Join</span></div></div>
</a>

@stop