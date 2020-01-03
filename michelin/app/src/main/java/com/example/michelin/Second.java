package com.example.michelin;

import android.content.Intent;
import android.media.Image;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
//import java.lang.String;

import com.example.myapplication.R;

import androidx.appcompat.app.AppCompatActivity;

public class Second extends AppCompatActivity {
    ImageView navi;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.second);
        navi=findViewById(R.id.navigation);
        navi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent n=new Intent(Second.this,MapsActivity.class);
                startActivity(n);
            }
        });


    }}