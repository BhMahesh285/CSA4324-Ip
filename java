import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;

public class CityManagementSystem {

    public static void main(String[] args) {
        // Create a new HTML document
        Document doc = Jsoup.parse("<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><title>City Management System</title></head><body></body></html>");
        
        // Create registration form container
        Element registrationDiv = doc.createElement("div")
            .addClass("container")
            .attr("id", "registration");
        registrationDiv.append("<h2>Registration Form</h2>");
        registrationDiv.append("<form action=\"#\" method=\"post\">"
            + "<label for=\"username\">Username:</label><br>"
            + "<input type=\"text\" id=\"username\" name=\"username\" value=\"mahesh\" required><br>"
            + "<label for=\"password\">Password:</label><br>"
            + "<input type=\"password\" id=\"password\" name=\"password\" value=\"5551\" required><br>"
            + "<label for=\"confirm_password\">Confirm Password:</label><br>"
            + "<input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" value=\"5551\" required><br>"
            + "<label for=\"email\">Email:</label><br>"
            + "<input type=\"email\" id=\"email\" name=\"email\" value=\"bhmahesh000@gmail.com\" required><br>"
            + "<input type=\"submit\" value=\"Register\"></form>");
        doc.body().appendChild(registrationDiv);
        
        // Create login form container
        Element loginDiv = doc.createElement("div")
            .addClass("container")
            .attr("id", "login")
            .attr("style", "display: none;");
        loginDiv.append("<h2>Login Form</h2>");
        loginDiv.append("<form action=\"#\" method=\"post\">"
            + "<label for=\"login_username\">Username:</label><br>"
            + "<input type=\"text\" id=\"login_username\" name=\"login_username\" value=\"mahesh\" required><br>"
            + "<label for=\"login_password\">Password:</label><br>"
            + "<input type=\"password\" id=\"login_password\" name=\"login_password\" value=\"5551\" required><br>"
            + "<input type=\"submit\" value=\"Login\"></form>");
        doc.body().appendChild(loginDiv);
        
        // Create architecture design container
        Element architectureDiv = doc.createElement("div")
            .addClass("architecture")
            .attr("id", "architecture")
            .attr("style", "display: none;");
        architectureDiv.append("<h2>Architecture Design</h2>");
        architectureDiv.append("<p>Number of Hospitals: 9</p>"
            + "<p>Number of Police Stations: 3</p>"
            + "<p>Number of Petrol Bunks: 6</p>"
            + "<p>Number of Supermarkets: 14</p>"
            + "<p>Number of Schools: 6</p>"
            + "<p>Number of Colleges: 16</p>"
            + "<p>Number of Restaurants: 20</p>"
            + "<p>Number of Cafes: 23</p>"
            + "<p>Number of Bike Showrooms: 9</p>"
            + "<p>Number of Car Showrooms: 6</p>"
            + "<p>Total Buildings: 463</p>");
        doc.body().appendChild(architectureDiv);
        
        // Print the HTML document
        System.out.println(doc.html());
    }
}
