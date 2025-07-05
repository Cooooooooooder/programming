#include <iostream>
using namespace std;

//           variabls
string item1 = "unknown";
string item2 = "unknown";
string item3 = "unknown";
int choic ;
double price1 = 0;
double price2 = 0;
double price3 = 0;
double amount = 0;
double total = 0;
double change = 0;
int itemCount =1;

void intro()
{
    cout << "Cashier system Menu : " << endl;
    cout << "1: Add Item" << endl;
    cout << "2: Display Items" << endl;
    cout << "3: Payment" << endl;
    cout << "4: Exit" << endl;
}
void fun()
{
    do
    {
        
        cout << "Enter Your Choice : ";
        cin >> choic;
        switch (choic)
        {

        case 1:
            if (itemCount == 1)
            {
                itemCount++;
                cout << "Enter Item Name : ";
                cin >> item1;
                cout << "Enter Item price : ";
                cin >> price1;
                cout << "Added: " << item1 << " - $" << price1 << endl;
            }
            else if (itemCount == 2)
            {
                itemCount++;
                cout << "Enter Item Name : ";
                cin >> item2;
                cout << "Enter Item price : ";
                cin >> price2;
                cout << "Added: " << item2 << " - $" << price2 << endl;
            }
            else if (itemCount == 3)
            {
                itemCount++;
                cout << "Enter Item Name : ";
                cin >> item3;
                cout << "Enter Item price : ";
                cin >> price3;
                cout << "Added: " << item3 << " - $" << price3 << endl;
            }
            else if (itemCount > 2)
            {
                cout << "Sory! maximum items is 3" << endl;
            }

            break;
        case 2:
            cout << "Items in the cart :" << endl;
            if (itemCount == 2)
            {
                cout << item1 << " - $" << price1 << endl;
                cout << "Total: " << price1 << endl;
            }
            if (itemCount == 3)
            {
                cout << item1 << " - $" << price1 << endl;
                cout << item2 << " - $" << price2 << endl;
                cout << "Total: " << price1 + price2 << endl;
            }
            if (itemCount == 4)
            {
                cout << item1 << " - $" << price1 << endl;
                cout << item2 << " - $" << price2 << endl;
                cout << item3 << " - $" << price3 << endl;
                cout << "Total: " << price1 + price2 + price3 << endl;
            }

            break;

        case 3:
            cout << "Enter payment amount : ";
            cin >> amount;
            if (itemCount == 2)
            {

                if (amount < price1)
                {
                    cout << "Error payment. Please pay at least $" << price1 << endl;
                }
                else
                {
                    change = amount - price1;
                    cout << "The Payment is : " << amount << endl;
                    cout << "The Cost is : " << price1 << endl;
                    cout << "The Change is : " << change << endl;
                }
            }
            if (itemCount == 3)
            {

                if (amount < (price1+price2))
                {
                    cout << "Error payment. Please pay at least $" << price1+price2 << endl;
                }
                else
                {
                    change = amount - (price1+price2);
                    cout << "The Payment is : " << amount << endl;
                    cout << "The Cost is : " << price1+price2 << endl;
                    cout << "The Change is : " << change << endl;
                }
            }
            if (itemCount == 4)
            {

                if (amount < (price1+price2+price3))
                {
                    cout << "Error payment. Please pay at least $" << (price1+price2+price3) << endl;
                }
                else
                {
                    change = amount - (price1+price2+price3);
                    cout << "The Payment is : " << amount << endl;
                    cout << "The Cost is : " << (price1+price2+price3) << endl;
                    cout << "The Change is : " << change << endl;
                }
            }
            
            break;

        case 4:
            cout << "Thank You " << endl;
            break;

        default:
            cout << "Your Choice " << choic << " Is not Valid " << endl;
            break;
        }

    } while (choic != 4);
}

int main()
{
    intro();
    fun();
}