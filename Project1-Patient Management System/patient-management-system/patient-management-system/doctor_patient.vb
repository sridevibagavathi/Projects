Imports System.Data.OleDb
Public Class doctor_patient
    Dim con As New OleDbConnection
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click

        Dim dt As New DataTable
        Dim ds As New DataSet
        ds.Tables.Add(dt)

        Dim da As New OleDbDataAdapter("select * from Table1 where [doctorid] ='" & TextBox1.Text & "' and [time]='" & ComboBox1.Text & "'", con)
        con.Open()
        da.Fill(dt)
        For Each DataRow In dt.Rows
            doctorviewpatient.Label1.Text = DataRow.item(0)
            doctorviewpatient.Label2.Text = DataRow.item(1)
            doctorviewpatient.Label3.Text = DataRow.item(2)
            doctorviewpatient.Label4.Text = DataRow.item(4)
            doctorviewpatient.Label5.Text = DataRow.item(5)
            doctorviewpatient.Label11.Text = DataRow.item(8)
        Next
        con.Close()
        doctorviewpatient.Show()
        Me.Close()

    End Sub

    Private Sub doctor_patient_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        con.ConnectionString = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\ADMIN\Documents\regpatient.accdb"
    End Sub

    Private Sub GroupBox1_Enter(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles GroupBox1.Enter

    End Sub
End Class