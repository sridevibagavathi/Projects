Imports System.Data.OleDb
Public Class receplogin
    Dim con As New OleDbConnection
    Private Sub receplogin_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        con.ConnectionString = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\ADMIN\Documents\receplogin.accdb"
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        If TextBox1.Text = "" Or MaskedTextBox1.Text = "" Then
            MsgBox("Invalid")
            receptionist_and_doctor.Show()

        ElseIf ask() = True Then
            MsgBox("Login")
            If MsgBoxResult.Ok Then
                Receptionist_Home_Page.Show()
                Me.Close()
            End If

        Else

            MsgBox("Invalid")

        End If
    End Sub
    Public Function ask()
        Dim dt As New DataTable
        Dim ds As New DataSet
        ds.Tables.Add(dt)
        con.Open()
        Dim da As New OleDbDataAdapter("select * from Table1", con)
        da.Fill(dt)
        For Each DataRow In dt.Rows
            If TextBox1.Text = DataRow.item(0) And MaskedTextBox1.Text = DataRow.item(1) Then
                con.Close()
                Return True
            End If
        Next
        con.Close()
        Return False

    End Function

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Text = ""
        MaskedTextBox1.Text = ""
    End Sub
End Class