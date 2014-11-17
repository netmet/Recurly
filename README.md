Account-Sort-By-Duplicate-Email-Addresses
=========================================

http://netmetrics.ca/projects/sort-by-duplicate-email-addresses
The initial script code (PHP) release responds to the customer-submitted ticket use case request for a method
by which:
* Recurly site accounts can be called by API List Accounts: https://docs.recurly.com/api/accounts#list-accounts
* Sorted by emails that may have more than one account associated with them

The script utilizes PHP array methods to sort the email instances in the site database, filter-down an email array that contains only the instances of duplicate emails.  Using a second array that contains the full list of site emails and account_codes, a final list (and array) of duplicate emails is rendered as headings, with the sub-listing of accounts associated with duplicate email.  The output looks something like the following:

<b>Email: someperson@someplace.com </b><br>
Account: 123456<br>
Account: 658726

<b>Email: anotherperson@foobar.com</b><br>
Account: 741258<br>
Account: 789456<br>
Account: 1236547898523

...and so on
