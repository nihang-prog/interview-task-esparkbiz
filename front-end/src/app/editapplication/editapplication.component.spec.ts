import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditapplicationComponent } from './editapplication.component';

describe('EditapplicationComponent', () => {
  let component: EditapplicationComponent;
  let fixture: ComponentFixture<EditapplicationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditapplicationComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(EditapplicationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
