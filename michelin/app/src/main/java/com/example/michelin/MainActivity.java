package com.example.michelin;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.ButtonBarLayout;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import com.example.myapplication.R;
import com.google.android.material.textfield.TextInputEditText;
import com.google.android.material.textfield.TextInputLayout;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;


public class MainActivity extends AppCompatActivity {
    TextInputEditText name,password;
    Button login;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        name=findViewById((R.id.username));
        password=findViewById(R.id.password);
        login=(Button)findViewById(R.id.but);
        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String textje =name.getText().toString();
                String textje2=password.getText().toString();

                try
                {
                    Class.forName("com.mysql.jdbc.Driver");
                    Connection con = DriverManager.getConnection("mtransport-mysqldbserver.mysql.database.azure.com", "Michelin@1234", "michelindb");

                     Statement stmt = con.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_UPDATABLE);
                     ResultSet rs = stmt.executeQuery("SELECT * FROM users");
                    while(rs.next()) {

                        String users = rs.getObject(2).toString();
                        String wachtwoorden = rs.getObject(3).toString();
                        if(textje.equals(users) && textje2.equals(wachtwoorden)) {

                            Toast.makeText(getApplicationContext(), "Logging in..", Toast.LENGTH_SHORT).show();
                            Intent i =new Intent(MainActivity.this,Second.class);
                            startActivity(i);

                        } else {

                            Toast.makeText(getApplicationContext(), "Wrong username or password", Toast.LENGTH_SHORT).show();
                        }

                }

            } catch (ClassNotFoundException e) {
                    e.printStackTrace();
                } catch (SQLException e) {
                    e.printStackTrace();
                }
            });


    }
}
