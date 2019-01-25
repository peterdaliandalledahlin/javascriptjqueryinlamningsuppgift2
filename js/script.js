$(function(){

        // adds Fullname to user
        if($("#fullname").length) {

            let request = new XMLHttpRequest();
    
            request.onload = function () {
                
                if(this.readyState == 4 && this.status == 200) {
        
                    let user = JSON.parse(this.response);
                    let fullname = user.firstname + " " + user.lastname;
            
                    $("#fullname").text(`Hi ${fullname}`);
  
                }
       
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/user");
            request.send();
        };//end Fullname to user KLAR

        // adds data to Total sales
        if($("#totalSales").length) {
            let request = new XMLHttpRequest();
       
            request.onload = function () {
                
                if(this.readyState == 4 && this.status == 200) {
        
                    let totalSalesAmount = JSON.parse(this.response);
                    let amount = totalSalesAmount.amount;

                    let totalSalesCurrency = JSON.parse(this.response);
                    let currency = totalSalesCurrency.currency;

                    let totalSalesMonth= JSON.parse(this.response);
                    let month = totalSalesMonth.period;
            
                    $("#totalSales").text(`${amount}`);
                    $("#totalSales").append(` ${currency}`);
                    $("#totalSalesMonth").text(` ${month}`);
        
                };
        
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/totalsales");
            request.send();
        };//end Total Sales KLAR

        // adds data to Total Purchases
        if($("#totalPurchases").length) {
            let request = new XMLHttpRequest();
        
            request.onload = function () {
                
                if(this.readyState == 4 && this.status == 200) {
        
                    let totalSalesAmount = JSON.parse(this.response);
                    let amount = totalSalesAmount.amount;

                    let totalSalesCurrency = JSON.parse(this.response);
                    let currency = totalSalesCurrency.currency;

                    let totalSalesMonth= JSON.parse(this.response);
                    let month = totalSalesMonth.period;
            
                    $("#totalPurchases").text(`${amount}`);
                    $("#totalPurchases").append(` ${currency}`);
                    $("#totalPurchasesMonth").text(` ${month}`);
        
                };
        
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/totalpurchases");
            request.send();
        };//end Total Purchases KLAR

        //adds data to Total Orders
        if($("#totalOrders").length) {
            let request = new XMLHttpRequest();
        
            request.onload = function () {
                
                if(this.readyState == 4 && this.status == 200) {
        
                    let totalSalesAmount = JSON.parse(this.response);
                    let amount = totalSalesAmount.amount;

                    let totalSalesCurrency = JSON.parse(this.response);
                    let currency = totalSalesCurrency.currency;

                    let totalSalesMonth= JSON.parse(this.response);
                    let month = totalSalesMonth.period;
            
                    $("#totalOrders").text(`${amount}`);
                    $("#totalOrders").append(` ${currency}`);
                    $("#totalOrdersMonth").text(` ${month}`);
        
                };
        
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/totalorders");
            request.send();
        };//end Total Orders KLAR

        //adds data to Total Growth
        if($("#totalGrowth").length) {
            let request = new XMLHttpRequest();
        
            request.onload = function () {
                
                if(this.readyState == 4 && this.status == 200) {
        
                    let totalSalesAmount = JSON.parse(this.response);
                    let amount = totalSalesAmount.amount;

                    let totalSalesCurrency = JSON.parse(this.response);
                    let currency = totalSalesCurrency.currency;

                    let totalSalesMonth= JSON.parse(this.response);
                    let month = totalSalesMonth.period;
            
                    $("#totalGrowth").text(`${amount}`);
                    $("#totalGrowth").append(` ${currency}`);
                    $("#totalGrowthMonth").text(` ${month}`);
        
                };
        
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/totalgrowth");
            request.send();
        };//end Total Growth KLAR

        //adds data to Sales Report Overview
        if($("#salesReportOverview").length) {
            let request = new XMLHttpRequest();
       
            request.onload = function () {
                
                if(this.readyState == 4 && this.status == 200) {
        
                    let salesReportOverviewDownloads = JSON.parse(this.response);
                    let downloads = salesReportOverviewDownloads.downloads;

                    let salesReportOverviewPurchases = JSON.parse(this.response);
                    let purchases = salesReportOverviewPurchases.försäljning;

                    let salesReportOverviewUsers = JSON.parse(this.response);
                    let users = salesReportOverviewUsers.users;

                    let salesReportOverviewGrowth = JSON.parse(this.response);
                    let growth = salesReportOverviewGrowth.growth;
            
                    $("#salesReportOverviewDownloads").text(`${numberWithCommas(downloads)}`);
                    $("#salesReportOverviewPurchases").text(`${numberWithCommas(purchases)}`);
                    $("#salesReportOverviewUsers").text(`${numberWithCommas(users)}`);
                    $("#salesReportOverviewGrowth").text(`${growth}`);
        
                };
        
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/salesreportoverview");
            request.send();
        };//end Sales Report Overview KLAR

        //adds data to Tickets
        if($("#tickets").length) {

            let request = new XMLHttpRequest();

            request.onload = function () {
                
                if(this.readyState == 4 && this.status == 200) {
                let object = JSON.parse(this.response);

                let years = object.years;

                years.forEach(year => {
                    $("#dropdown-menu").append(`
                    <a class="dropdown-item" href="#">${year}</a>

                    `)
                });

                    for(let i=0; i < object.tickets.length; i++) {

                        let fullname = object.tickets[i].fullname.split(" ");
                        let initials = fullname[0].charAt(0) + fullname[1].charAt(0);



                        $("#ticketsTable tbody").append(`
                            <tr>
                            <td class="pl-0">
                            <div class="icon-rounded-primary icon-rounded-md">
                            <h4 class="font-weight-medium">${initials}</h4>
                            </div>
                        </td>
                            <td>
                                <p class="mb-0">${object.tickets[i].fullname}</p>
                                <p class="text-muted mb-0">${object.tickets[i].city}</p>
                            </td>
                            <td>
                                <p class="mb-0">${object.tickets[i].date}</p>
                                <p class="text-muted mb-0">${object.tickets[i].time}</p>
                            </td>
                            <td>
                                <p class="mb-0">${object.tickets[i].project}</p>
                                <p class="text-muted mb-0">${object.tickets[i].status}</p>
                            </td>
                            <td class="pr-0">
                                <i class="mdi mdi-dots-horizontal icon-sm cursor-pointer"></i>
                            </td>
                            </tr>
                        `)

                        $("#2015").text(`${object.years[0]}`);
                        $("#2016").text(`${object.years[1]}`);
                        $("#2017").text(`${object.years[2]}`);
                        $("#2018").text(`${object.years[3]}`);

                    };

                };
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/tickets", true);
            request.send();

        };//end Tickets KLAR

        //adds data to Update
        if($("#updates").length) {

            let request = new XMLHttpRequest();

                request.onload = function () {
                    
                    if(this.readyState == 4 && this.status == 200) {
                    let object = JSON.parse(this.response);
            
                        for(let i=0; i < object.updates.length; i++) {

                            $("#updateBox").append(
                                `
                                <li>
                                <h6 id="title1">${object.updates[i].title}</h6>
                                <p class="mt-2" id="description1">${object.updates[i].description}</p>
                                <p class="text-muted mb-4">
                                <i class="mdi mdi-clock-outline" id="time1"></i>${object.updates[i].time}           
                                </p>
                            </li>
                                `
                            )
                        };
                    };
                };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/updates", true);
            request.send();

        };//end Update KLAR

        //adds data to Open Invoices
        if($("#openInvoices").length) {

            let request = new XMLHttpRequest();

            request.onload = function () {

                let currency = "kr";
                
                if(this.readyState == 4 && this.status == 200) {
                let object = JSON.parse(this.response);

                    for(let i=0; i < object.invoices.length; i++) {

                        switch (object.invoices[i].status) {
                            case "Öppen": 
                                var badge = "badge-warning";
                                break;
                            case "Pågående":
                                var badge = "badge-success";
                                break;
                            case "Tillfälligt stoppad":
                                var badge = "badge-danger";
                                break;
                            default:
                            console.log("Fel i switch");
                        }
 
                        $("#openInvoicesTable").append(`
                        <tr>
                            <td>${object.invoices[i].invoicenumber}</td>
                            <td>${object.invoices[i].customer}</td>
                            <td>${object.invoices[i].shipping}</td>
                            <td class="font-weight-bold">${numberWithCommas(object.invoices[i].totalprice)} ${currency}</td>
                            <td>${numberWithCommas(object.invoices[i].customerprice)} ${currency}</td>
                            <td>
                            <div class="badge badge-fw ${badge}">${object.invoices[i].status}</div>
                            </td>
                        </tr>
                        `)

                        //object.invoices.forEach(function(item){
                        //     console.log('Invoicenumber: ' + item.invoicenumber);
                        //     console.log('Customer: ' + item.customer);
                        //     console.log('Shipping: ' + item.shipping);
                        //     console.log('Total price: ' + item.totalprice);
                        //     console.log('Customer price: ' + item.customerprice);
                        //     console.log('Status: ' + item.status);
                        //});            

                    };
                };
            };
        
            request.open("GET", "https://fe18.azurewebsites.net/api/openinvoices", true);
            request.send();

        };//end open Invoices KLAR

});