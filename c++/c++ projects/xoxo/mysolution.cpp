#include <iostream>
using namespace std;

char Matrix[3][3] = {'1', '2', '3',
                     '4', '5', '6',
                     '7', '8', '9'};


char position = '0';
int stop = 0;
void drowFirstMatrix()
{
    for (int i = 0; i < 3; i++)
    {
        cout << "| ";
        for (int j = 0; j < 3; j++)
        {

            cout << Matrix[i][j] << " ";
        }
        cout << "|" << endl;
    }
}


void check()
{
    if ( Matrix[0][0] == 'X' && Matrix[0][1] == 'X' && Matrix[0][2] == 'X' )
    {
        cout << "Player X Wins !!!" << endl;
        stop++;
    }
    else if (Matrix[1][0] == 'X' && Matrix[1][1] == 'X' && Matrix[1][2] == 'X')
    {
        cout << "Player X Wins !!!" << endl;
        stop++;
    }
    else if (Matrix[2][0] == 'X' && Matrix[2][1] == 'X' && Matrix[2][2] == 'X')
    {
        cout << "Player X Wins !!!" << endl;
        stop++;

    }
    else if (Matrix[0][0] == 'O' && Matrix[0][1] == 'O' && Matrix[0][2] == 'O')
    {
        cout << "Player O Wins !!!" << endl;
        stop++;

    }
    else if (Matrix[1][0] == 'O' && Matrix[1][1] == 'O' && Matrix[1][2] == 'O')
    {
        cout << "Player O Wins !!!" << endl;
        stop++;

    }
    else if (Matrix[2][0] == 'O' && Matrix[2][1] == 'O' && Matrix[2][2] == 'O')
    {
        cout << "Player O Wins !!!" << endl;
        stop++;

    }
    else if (Matrix[0][0] == 'X' && Matrix[1][1] == 'X' && Matrix[2][2] == 'X')
    {
        cout << "Player X Wins !!!" << endl;
        stop++;

    }
    else if (Matrix[0][2] == 'X' && Matrix[1][1] == 'X' && Matrix[2][0] == 'X')
    {
        cout << "Player X Wins !!!" << endl;
        stop++;

    }
    else if (Matrix[0][0] == 'O' && Matrix[1][1] == 'O' && Matrix[2][2] == 'O')
    {
        cout << "Player O Wins !!!" << endl;
        stop++;

    }
    else if (Matrix[0][2] == 'O' && Matrix[1][1] == 'O' && Matrix[2][0] == 'O')
    {
        cout << "Player O Wins !!!" << endl;
        stop++;

    }
}

void replacePositions()
{

    cout << "Choose Your Position - Player( X ) : ";
    cin >> position;
    while (position < '1' || position > '9')
    {
        cout << "Wrong Position!   Choose Your Position - Player( X ) : ";
        cin >> position;
    }
    cout << endl;
    for (int i = 0; i < 3; i++)
    {
        cout << "| ";
        for (int j = 0; j < 3; j++)
        {
            if (Matrix[i][j] == position)
            {
                Matrix[i][j] = 'X';
                cout << Matrix[i][j] << " ";
            }
            else
            {
                cout << Matrix[i][j] << " ";
            }
        }
        cout << "|" << endl;
    }
    cout << endl;

        check();



    cout << "Choose Your Position - Player( O ) : ";
    cin >> position;
    while (position < '1' || position > '9')
    {
        cout << "Wrong Position!   Choose Your Position - Player( O ) : ";
        cin >> position;
    }
    cout << endl;
    for (int i = 0; i < 3; i++)
    {
        cout << "| ";
        for (int j = 0; j < 3; j++)
        {
            if (Matrix[i][j] == position)
            {
                Matrix[i][j] = 'O';
                cout << Matrix[i][j] << " ";
            }
            else
            {
                cout << Matrix[i][j] << " ";
            }
        }
        cout << "|" << endl;
    }
    cout << endl;
}




int main()
{

    drowFirstMatrix();
    while (stop==0)
    {
        replacePositions();
        check();
    }
    return 0;
}