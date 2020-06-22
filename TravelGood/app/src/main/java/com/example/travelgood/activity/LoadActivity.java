package com.example.travelgood.activity;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.WindowManager;
import android.widget.ProgressBar;
import android.widget.TextView;

import com.example.travelgood.R;

public class LoadActivity extends AppCompatActivity {
    ProgressBar progressBar;
    TextView textView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_load);

        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        Anhxa();
        progressBarAnimation();
    }

    private void Anhxa() {
        progressBar = (ProgressBar) findViewById(R.id.progress_bar);
        textView = (TextView) findViewById(R.id.text_view);
    }

    public  void progressBarAnimation(){
        ProgressBarAnimation anim = new ProgressBarAnimation(this,progressBar,textView,0f,100f);
        anim.setDuration(5000);
        progressBar.setAnimation(anim);
    }
}
