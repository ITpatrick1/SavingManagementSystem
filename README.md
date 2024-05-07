# Saving Management System

This project is an Saving Management System developed using PHP and MySQL. It allows administrators to manage member information, loans, savings, penalties, and transactions within a cooperative.

##USSD Application Features

#User Registration:

Users can register their accounts through USSD by providing necessary details like name, ID number, contact information, etc.
#Loan Application

Users can apply for loans through USSD by selecting the loan type, amount, and duration.
The system processes the loan application and provides feedback via USSD.
#Loan Repayment

Users can repay their loans through USSD by selecting the repayment option, specifying the amount, and confirming the transaction.
The system updates the loan status and balance accordingly.
#Savings

Users can save money through USSD by selecting the saving option, entering the amount, and confirming the transaction.
The system updates the user's savings balance.
#Penalty Handling

Users can view penalties issued to them and pay penalties through USSD.
The system updates penalty status and user accounts accordingly.
#Transaction History

Users can view their transaction history through USSD, including deposits, withdrawals, loan transactions, etc.
The system retrieves and displays transaction information via USSD.

##Integration with African Talking and Postman:

#African Talking


African Talking is an API provider that offers communication services, including SMS and USSD functionalities.
You can integrate African Talking's USSD API to enable interaction between your USSD application and users.
#Postman

Postman is a collaboration platform for API development.
You can use Postman to test your USSD API endpoints and ensure smooth communication between your USSD application and other systems.
#Implementation Steps

#1.Set Up USSD Gateway

Integrate with African Talking's USSD API to send and receive USSD messages.
#2.Define USSD Menu Structure:

Create a menu structure for different USSD services such as registration, loan application, loan repayment, etc.
#3.Implement USSD Handlers:

Develop backend handlers to process USSD requests and interact with the database accordingly.
#4.Error Handling and Security:

Implement error handling mechanisms and ensure data security during USSD interactions.
#5.Testing and Deployment:

Test the USSD application thoroughly using tools like Postman.
Deploy the USSD application to a suitable environment for production use.

## Features

- Administrator Management: Add, edit, and delete administrator accounts.
- Member Management: Add, edit, and delete member profiles including their contact details.
- Loan Management: Approve, disburse, and track loans with repayment details.
- Savings Management: Record member savings and track their share balances.
- Transaction Management: Record member transactions including withdrawals and deposits.
- Penalty Management: Record and manage penalties issued to members.

## Technologies Used
- PHP 
- MySQL (MariaDB)
- HTML
- CSS
- JavaScript

## Installation

1. Clone the repository.
2. Import the provided SQL dump into your MySQL database.
3. Configure the database connection in the PHP files.
4. Access the system through a web browser.



