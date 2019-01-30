//Tickets Box
 
    // Filter tickets click event
    $("#dropdownMenuDate1").on("click", function () {
        $(".dropdown-item").on("click", function (e) {
          sortingTickets($(this).attr("data-year"));
          console.log($(this).attr("data-year"));
          e.preventDefault();
        })
      })
   
   
      //Dropdown menu
      if ($("#dropdown-menu").length) {
        let request = new XMLHttpRequest();
        request.onload = function () {
          if (this.readyState == 4 && this.status == 200) {
   
            var object = JSON.parse(this.response);
   
            let years = object.years;
            let revYears = years.reverse();
   
            revYears.forEach(year => {
              $("#dropdown-menu").append(`<a class="dropdown-item" data-year="${year}" href="#">${year}</a>`);
            });
   
          }
        }
        request.open("GET", "https://fe18.azurewebsites.net/api/tickets", true);
        request.send();
   
      }
   
   
      function sortingTickets(year) {
   
        let request = new XMLHttpRequest();
        let yearMatch = new Array();
   
   
        request.onload = function () {
   
          if (this.readyState == 4 && this.status == 200) {
            var object = JSON.parse(this.response);
            let allTickets = object.tickets;
            console.log(yearMatch);
   
   
            // Filtering tickets that matched
            allTickets.forEach(ticket => {
   
              let date = new Date(ticket.date);
              let ticketYear = date.getFullYear();
   
              if (ticketYear == year) {
                yearMatch.push(ticket);
                console.log(`${ticketYear} | ${year}`);
                console.log(ticket);
              }
            });
            // Clears the table
            $('#ticket-table-body').html("");
   
            if (yearMatch.length == 0) {
   
              $('#ticket-table-body').html(`<tr><td colspan="4" align="center"><h4 class="text-primary text-center font-weight-medium">Ingen ticket matchar med året ${year}</h4></td></tr>`);
   
   
            } else {// Adds the matched tickets to the table
              yearMatch.forEach(tickets => {
   
   
                let name = tickets.fullname;
                let initials = getInitials(name);
                function getInitials(name) {
                  var parts = name.split(' ')
                  var initials = ''
                  for (var i = 0; i < parts.length; i++) {
                    if (parts[i].length > 0 && parts[i] !== '') {
                      initials += parts[i][0]
                    }
                  }
                  return initials
                }
   
                let addTicket = `<tr>
                            <td class="pl-0">
                            <div class="icon-rounded-primary icon-rounded-md">
                            <h4 class="font-weight-medium">${initials}</h4>
                            </div>
                            </td>
                            <td>
                            <p class="mb-0">${tickets.fullname}</p>
                            <p class="text-muted mb-0">${tickets.city}</p>
                            </td>
                            <td>
                            <p class="mb-0">${tickets.date}</p>
                            <p class="text-muted mb-0"> ${tickets.time}</p>
                            </td>
                            <td>
                            <p class="mb-0">${tickets.project}</p>
                            <p class="text-muted mb-0">${tickets.status}</p>
                            </td>
                            </tr>`;
   
   
                $('#ticket-table-body').append(addTicket);
              });
            }
   
          }
        }
        request.open("GET", "https://fe18.azurewebsites.net/api/tickets", true);
        request.send();
      }